<?php

namespace App\Controller;

use App\Model\User;
use App\Services\SmtpMailer;

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showLogin()
    {
    
        require_once '../app/View/auth/login.view.php';
    }

    public function showSignUp()
    {
        require_once '../app/View/auth/signUp.view.php';
    }

    public function register()
    {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (empty($username) || empty($email) || empty($password)) {
            $error = "Tous les champs sont obligatoires";
            require_once '../app/View/auth/signup.view.php';
            return;
        }

        if ($this->userModel->exists($email)) {
            $error = "Email déjà utilisé";
            require_once '../app/View/auth/signup.view.php';
            return;
        }

        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $this->userModel->create($username, $email, $passwordHash);

        $_SESSION['user_email'] = $email;
        header('Location: /EvolveAi/questionnaire/showQuest');
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
            require_once '../app/View/auth/login.view.php';
            $_SESSION['toast'] = ['message' => 'incorrect infos!'];
            return;
        }
    }

    public function sendLink(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $email = trim($_POST['email']);

        if (!$this->userModel->exists($email)) {
            $_SESSION['toast'] = ['message' => 'Invalid Email'];
            require_once '../app/View/auth/login.view.php';
            return;
        }

        $token = bin2hex(random_bytes(32));
        $expiresAt = date('Y-m-d H:i:s', time() + 300);

        $this->userModel->storeResetToken($email, $token, $expiresAt);

        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $base   = $scheme . '://' . $host . '/EvolveAI';

        $link = $base . '/auth/checkOauth/' . $token;

        $mailer = new SmtpMailer();
        $mailer->sendMail('Reset Password', $link, $email);

        $_SESSION['toast'] = ['message' => 'Password Reset Link Sent'];
        require_once '../app/View/auth/login.view.php';
    }

    public function checkOauth(string $token): void
    {
        $record = $this->userModel->findValidResetToken($token);

        if (!$record) {
            $_SESSION['toast'] = ['message' => 'Password Reset Link Invalid Or Expired !'];
            require_once '../app/view/auth/login.view.php';
        }

        $userId = $record['id'];

        require_once '../app/view/auth/updatePassword.php';
    }

    public function resetPassword(int $userId):void
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = $_POST['password'];
            $passwordHash = password_hash($password,PASSWORD_BCRYPT);
            $is_reseted = $this->userModel->resetPassword($userId,$passwordHash);
            
            if($is_reseted) {
                $_SESSION['toast'] = ['message' => 'Password Reseted Succefuly !'];
            } else {
                $_SESSION['toast'] = ['message' => 'Failed Reset Password !'];
            }
            require_once '../app/View/auth/login.view.php';
        }
    }

    public function showForgetPassword():void
    {
        require_once '../app/View/auth/forgetPassword.view.php';
    }

}
