<?php

namespace App\Services;

use App\Services\Interfaces\MailerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;


class SmtpMailer implements MailerInterface
{
    private PHPmailer $mail;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__))
;
        $dotenv->load();

        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->Host       = $_ENV['SMTP_HOST'];
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = $_ENV['SMTP_USER'];
        $this->mail->Password   = $_ENV['SMTP_PASS'];
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port       = $_ENV['SMTP_PORT'];  
    }

    public function sendMail(string $subject,string $message,string $to_email): bool
    {
        $this->mail->setFrom('elwalid38@gmail.com', 'Evolve Ai co.');

        try {

            $this->mail->clearAddresses();
            $this->mail->addAddress($to_email, 'User');
            $this->mail->isHTML(true);

            $this->mail->Subject =  $subject;
            $this->mail->Body    = $message;

            $this->mail->send();

            return true;

        } catch (Exception $e) {

            return false;
        }
    }
}