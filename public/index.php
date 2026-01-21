<?php

session_start();

require_once '../vendor/autoload.php';

use App\Core\Database;
use App\Core\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));

$dotenv->load();



$router = new Router();