<?php

session_start();

require_once '../vendor/autoload.php';

use App\Core\Database;
use App\Core\Router;

$router = new Router();