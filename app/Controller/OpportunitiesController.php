<?php

namespace App\Controller;

use App\Core\Controller;

class OpportunitiesController extends Controller
{
    public function showOpportunities()
    {
        if (!isset($_SESSION['user_id'])) {
            $this->view('auth/login.view');
        } else {
            $this->view('opportunities.view');
        }
    }   

}