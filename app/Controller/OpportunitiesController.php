<?php

namespace App\Controller;

use App\Core\Controller;

class OpportunitiesController extends Controller
{
    public function showOpportunities()
    {
        $this->view('opportunities.view');

    }   

}