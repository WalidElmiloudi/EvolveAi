<?php

namespace App\Core;

class ControllerFactory
{
    public static function make(string $className)
    {
        $pdo = Database::getInstance();

        switch($className) {
            case 'App\Controller\HomeController' : return new $className();
                                    break;
        }
    }
}