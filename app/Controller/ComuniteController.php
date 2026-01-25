<?php

namespace App\Controller;

use App\Core\Controller;

class ComuniteController extends Controller
{
    public function showCommunity():void
    {
        if (!isset($_SESSION['user_id'])) {
            $this->view('auth/login.view');
        } else {
            $this->view('community.view');
        }
    }

}