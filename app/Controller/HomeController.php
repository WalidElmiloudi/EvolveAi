<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{

    
    public function show(): void
    {
        $this->View('home.view');
    }
}