<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artiste_Type extends Model
{
  protected $guarded=['artists_id', 'types_id'];

  protected $table = 'Artiste_Type';

  public $timestamps = false;

  public function artists(){

  	return $this->belongsTo('App\Artist');
  }

  public function types(){

  	return $this->belongsTo('App\Type');
  }

  public function artiste_type_show(){

  	return $this->belongsTo('App\Artiste_Type_Show');
  }
}
