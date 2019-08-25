<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  

  	protected $fillable =['montant','users_id', 'shows_id'];


    protected $table = 'reservation';

    public $timestamps = false;

     public function user(){

        return $this->belongsToMany('App\User');
    }

      public function show(){

    	return $this->hasMany('App\Show');
    }
}
