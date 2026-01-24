<?php

namespace App\Repositories;

use App\Core\Database;
use PDO;

class OpportunityRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function saveChoice($userId, $title, $description) {
        $sqlDelete = "DELETE FROM opportunities WHERE user_id = :uid";
        $this->db->prepare($sqlDelete)->execute(['uid' => $userId]);

        $sql = "INSERT INTO opportunities (user_id, title, description) 
                VALUES (:uid, :title, :desc)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'uid'   => $userId,
            'title' => $title,
            'desc'  => $description
        ]);
    }

    public function getCurrentOpportunity($userId) {
        $sql = "SELECT * FROM opportunities WHERE user_id = :uid LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['uid' => $userId]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}