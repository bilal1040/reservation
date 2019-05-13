<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation_user extends Model
{
   protected $fillable =['places'];

   protected $guarded=['users_id', 'representation_id'];

   protected $table = "representations_user";

   public $timestamps = false;

   public function users(){

   	return $this->hasOne('App\Users');

   }

  public function representation(){

  	return $this->belongsToMany('App\Representation');
  }


}
