<?php

namespace App\Services\Interfaces;

interface MailerInterface 
{
    public function sendMail(string $subject,string $message,string $toEmail);
}