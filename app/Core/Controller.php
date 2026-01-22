<?php

namespace App\Core;

class Controller
{
    public function view(string $View): void
    {
        if(file_exists('../app/View/'.$View.'.php')) {
            require_once '../app/View/'.$View.'.php';
        } else {
            die("View : ".$View." doesn't exists !");
        }
    }
}