<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation_user extends Model
{
   protected $fillable =['places'];

   protected $guarded=['userss_id', 'representation_id'];

   protected $table = "representations_user";

   public $timestamps = false;

   public function userss(){

   	return $this->hasOne('App\Userss');

   }

  public function representation(){

  	return $this->belongsToMany('App\Representation');
  }


}
