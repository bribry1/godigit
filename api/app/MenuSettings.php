<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSettings extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'menu_settings';
  protected $fillable = array(
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
