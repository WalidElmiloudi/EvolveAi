<?php

namespace App\Controller;
use App\Core\Controller;

class planController extends Controller
{

public function showPlan(){

        $this->View('dailyplan.view');
        
}

}