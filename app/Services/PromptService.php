<?php

namespace App\Services;

use App\Core\Database;
use App\Model\User;
use PDO;

class PromptService {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function buildJsonPrompt($user_email) {
        $userModel = new User();
        $user_id = $userModel->getIdByEmail($user_email);
        $sql = 'SELECT  u.username , 
                        p.age , 
                        p.income_goal , 
                        p.time_available , 
                        p.current_stat , 
                        p.device , 
                        p.learning_style
                FROM "user" u
                JOIN "profile" p ON p.user_id = u.id
                WHERE u.id = :user_id';

        $stmt = $this->db->prepare($sql);

        $stmt->execute(['user_id' => $user_id]);

        $data = $stmt->fetch(PDO::FETCH_OBJ);
        if(!$data){return null;}
        
        $skillsql = "SELECT name , level FROM skill WHERE user_id = :user_id";
        $skillstmt = $this->db->prepare($skillsql);
        $skillstmt->execute(['user_id' => $user_id]);
        $skills = $skillstmt->fetchAll(PDO::FETCH_OBJ);

        $skillstext = "";
        foreach($skills as $skill){
            $skillstext .= $skill->name . "(Level " . $skill->level . "), ";
        }

        $prompt = "Act as a strict Career Coach for " . $data->username . ". ";
        $prompt .= "User Context: They are a " . $data->current_stat . " (Age: " . $data->age . ") ";

        if(!empty($skillstext)){
            $prompt .= "Current Skills: " . rtrim($skillstext, ', ') . ". ";
        }
        $prompt .= "looking to earn " . $data->income_goal . ". ";
        $prompt .= "They have " . $data->time_available . " available today. ";
        $prompt .= "Learning Style: " . $data->learning_style . ". ";
        $prompt .= "Device: " . $data->device . " (IMPORTANT: Only assign tasks compatible with this device). ";

        $prompt .= "COMMAND: Generate 3 to 5 tasks to help them reach their goal. ";
        $prompt .= "OUTPUT FORMAT: Return ONLY a raw JSON array. Do not use Markdown (```json). ";
        $prompt .= "JSON Schema: [{ \"title\": \"Task Title\", \"description\": \"Details\", \"duration\": \"30m\", \"priority\": \"high\" }]";

        return $prompt;
    }

}