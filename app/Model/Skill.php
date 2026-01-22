<?php

namespace App\Model;

use App\Model\User;
use PDO;

class Skill
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function add(string $name, int $level, string $userEmail): void
    {
        $user = new User();

        $userEntity = $user->getIdByEmail($userEmail);

        
        $sql = "
            INSERT INTO skill (name, level, is_verified, user_id)
            VALUES (:name, :level, false, :user_id)
            ON CONFLICT (name) DO NOTHING
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name'    => $name,
            ':level'   => $level,
            ':user_id' => $userEntity
        ]);
    }
}