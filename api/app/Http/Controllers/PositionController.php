<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuSettings;
use DB;

class PositionController extends APIController
{
  function __construct(){
    $this->model = new MenuSettings();
  }

  public function create(){
  }
  public function update(){
    
  }
}
