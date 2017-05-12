<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSettings extends Model
{
  protected $connection = 'mysql';
  //protected $primaryKey = 'id';
  protected $table = 'menu_settings';
  protected $fillable = array(
      'id',
      'module',
      'title',
      'icon',
      'method',
      'rank'
  );
  //public $timestamps = false;
  public function menu()
  {
    return $this->belongsTo('\App\MenuSettings');
  }
}
