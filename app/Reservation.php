<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  	protected $guarded=['users_id', 'shows_id'];

  	protected $fillable =['quantite'];


    protected $table = 'reservation';

    public $timestamps = false;

     public function user(){

        return $this->belongsToMany('App\User');
    }

      public function show(){

    	return $this->hasMany('App\Show');
    }
}
