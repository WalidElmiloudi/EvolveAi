<?php

namespace App\Core;

class Router
{
    private $currentController = 'HomeController';
    private $currentMethod = 'index';
    private $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        // Controller
        if (isset($url[0]) && file_exists('../app/Controller/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->currentController = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        $controllerClass = 'App\\Controller\\' . $this->currentController;

        if (!class_exists($controllerClass)) {
            die('Controller not found');
        }

        $controller = new $controllerClass();

        // Method
        if (isset($url[1]) && method_exists($controller, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$controller, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }

        return [];
    }
}
