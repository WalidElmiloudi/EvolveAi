<?php

namespace App\Model;

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
            INSERT INTO password_reset (email, token, expires_at)
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$email, $token, $expiresAt]);
    }

    public function findValidResetToken($token)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM password_reset
            WHERE token = ? AND expires_at > NOW()
        ");
        $stmt->execute([$token]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}