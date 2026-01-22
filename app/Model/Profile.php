<?php

namespace App\Model;

use App\Model\User;
use PDO;

class Profile
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function create(array $data, string $email): int
    {
        $user = new User();

        $userEntity = $user->getIdByEmail($email);

        $sql = "
            INSERT INTO \"profile\" 
            (user_id, age, income_goal, device, learning_style, current_stat)
            VALUES 
            (:user_id, :age, :income, :device, :style, :stat)
            RETURNING id
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':user_id' => $userEntity,
            ':age'     => (int) $data['age'],
            ':income'  => $data['income'],
            ':device'  => $data['device'],
            ':style'   => $data['style'],
            ':stat'    => $data['experience']
        ]);

        return $stmt->fetchColumn();
    }
}