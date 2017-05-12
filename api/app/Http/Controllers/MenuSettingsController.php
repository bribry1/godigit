<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuSettings;
use DB;

class MenuSettingsController extends APIController
{
  function __construct(){
    $this->model = new MenuSettings();
  }

  public function insert(){
    $data = array(
      'id'      => '6',
      'module'  => 'primary_menu',
      'title'   => 'DTR Management',
      'icon'    => 'fa fa-calendar',
      'method'  => 'dtr',
      'rank'    => '4'
    );
    $this->model->fill($data);
    $this->model->save();
  }
}
