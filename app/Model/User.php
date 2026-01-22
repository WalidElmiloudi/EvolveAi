<?php

namespace App\Model;

use App\Core\Database;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function login($email, $password)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM \"user\" WHERE email = ?"
        );
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public function create($username, $email, $password)
    {
        $stmt = $this->db->prepare("
            INSERT INTO \"user\" (username, email, password) 
            VALUES (:username, :email, :password)
        ");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        return $stmt->execute();
    }

    public function exists($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM \"user\" WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC) ? true : false;
    }

    public function storeResetToken($email, $token, $expiresAt)
    {
        $stmt = $this->db->prepare("
            INSERT INTO password_reset (email, token, expired_at)
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$email, $token, $expiresAt]);
    }

    public function findValidResetToken($token)
    {
        $stmt = $this->db->prepare("
            SELECT p.*,u.id FROM password_reset p
            JOIN \"user\" u ON p.email = u.email
            WHERE token = ? AND expired_at > NOW()
        ");
        $stmt->execute([$token]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function resetPassword(int $userId,string $passwordHash): bool
    {

        $stmt = $this->db->prepare("
            UPDATE \"user\" SET password = ? WHERE id = ?
        ");
        return $stmt->execute([$passwordHash,$userId]) ? true : false;
    }
    
    public function getIdByEmail(string $email): int
    {
        $stmt = $this->db->prepare("SELECT * FROM \"user\" WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result['id'];
    }
}