<?php

namespace App\controller;

use App\Model\User;

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showLogin()
    {
        require_once '../app/view/auth/login.view.php';
    }

    public function showSignUp()
    {
        require_once '../app/view/auth/signUp.view.php';
    }

    public function register()
    {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (empty($username) || empty($email) || empty($password)) {
            $error = "Tous les champs sont obligatoires";
            require_once '../app/view/auth/signup.view.php';
            return;
        }

        if ($this->userModel->exists($email)) {
            $error = "Email déjà utilisé";
            require_once '../app/view/auth/signup.view.php';
            return;
        }

        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $this->userModel->create($username, $email, $passwordHash);

        require_once '../app/view/auth/login.view.php';
        exit;
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /EvolveAi/login');
            exit;
        }
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $user = $this->userModel->login($email, $password);

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: /EvolveAi/questionnaire/showQuest');
            exit;
        } else {
            $error = "Email ou mot de passe incorrect";
            header('Location: /EvolveAi/auth/showlogin');
            return;
        }
    }
}
