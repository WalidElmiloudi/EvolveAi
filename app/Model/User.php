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
<<<<<<< HEAD:app/Model/User.php
<<<<<<< HEAD:app/Model/User.php
            "SELECT * FROM \"user\" WHERE email = ?"
=======
            'SELECT * FROM "user" WHERE email = ?'
>>>>>>> f4d1d97351617a4c030b82ca4754b71889dff67e:app/Models/User.php
=======
            "SELECT * FROM \"user\" WHERE email = ?"
>>>>>>> c97eee508f506c1c1b2ffb25b109d519869b0897:app/Models/User.php
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
<<<<<<< HEAD:app/Model/User.php
<<<<<<< HEAD:app/Model/User.php
<<<<<<< HEAD:app/Model/User.php
        $stmt = $this->db->prepare("INSERT INTO \"user\" (username, email, password_hash) 
                                    VALUES (:username, :email, :password_hash)
=======
        $stmt = $this->db->prepare("
            INSERT INTO \"user\" (username, email, password_hash) 
            VALUES (:username, :email, :password_hash)
>>>>>>> 8b7db1f361601a8f08e8342d67139a2241315e92:app/Models/User.php
        ");
=======
        $stmt = $this->db->prepare('
            INSERT INTO "user" (username, email, password) 
            VALUES (:username, :email, :password)
        ');
>>>>>>> f4d1d97351617a4c030b82ca4754b71889dff67e:app/Models/User.php
=======
        $stmt = $this->db->prepare("
            INSERT INTO \"user\" (username, email, password_hash) 
            VALUES (:username, :email, :password_hash)
        ");
>>>>>>> c97eee508f506c1c1b2ffb25b109d519869b0897:app/Models/User.php

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        return $stmt->execute();
    }

    public function exists($email)
    {
<<<<<<< HEAD:app/Model/User.php
<<<<<<< HEAD:app/Model/User.php

        $stmt = $this->db->prepare("SELECT * FROM \"user\" WHERE email = :email");
=======
        $stmt = $this->db->prepare('SELECT * FROM "user" WHERE email = :email');
>>>>>>> f4d1d97351617a4c030b82ca4754b71889dff67e:app/Models/User.php
=======

        $stmt = $this->db->prepare("SELECT * FROM \"user\" WHERE email = :email");
>>>>>>> c97eee508f506c1c1b2ffb25b109d519869b0897:app/Models/User.php
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ? true : false;
    }
}