<?php

namespace App\Model;

use App\Core\Database;
use PDO;

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

        if ($user && password_verify($password, $user['password_hash'])) {
            return $user;
        }
        return false;
    }
    public function create($username, $email, $password)
    {
<<<<<<< HEAD:app/Model/User.php
        $stmt = $this->db->prepare("INSERT INTO \"user\" (username, email, password_hash) 
                                    VALUES (:username, :email, :password_hash)
=======
        $stmt = $this->db->prepare("
            INSERT INTO \"user\" (username, email, password_hash) 
            VALUES (:username, :email, :password_hash)
>>>>>>> 8b7db1f361601a8f08e8342d67139a2241315e92:app/Models/User.php
        ");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password_hash', $password);

        return $stmt->execute();
    }

    public function exists($email)
    {

        $stmt = $this->db->prepare("SELECT * FROM \"user\" WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();


        return $stmt->fetch(PDO::FETCH_ASSOC) ? true : false;
    }
}
