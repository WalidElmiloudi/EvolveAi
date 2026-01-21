<?php

namespace App\Controller;

use App\Core\Controller;

class ComuniteController extends Controller {

public function showCommunity(){
  $this->view('community.view');
}

}