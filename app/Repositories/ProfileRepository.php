<?php

namespace App\Repositories;

use App\Core\Database;

class ProfileRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function createProfile($userId, $data) {
        $sql = "INSERT INTO \"profile\" (user_id, age, income_goal, time_available, current_stat, device, learning_style) 
                VALUES (:uid, :age, :inc, :time, :stat, :dev, :style)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'uid'   => $userId,
            'age'   => $data['age'],
            'inc'   => $data['income_goal'],
            'time'  => $data['time_available'],
            'stat'  => $data['current_stat'],
            'dev'   => $data['device'],   
            'style' => $data['learning_style'] 
        ]);
    }

    public function addSkill($userId, $skillName, $level) {
        $sql = "INSERT INTO skill (user_id, name, level, is_verified) 
                VALUES (:uid, :name, :lvl, false)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'uid'  => $userId,
            'name' => $skillName,
            'lvl'  => $level
        ]);
    }
}