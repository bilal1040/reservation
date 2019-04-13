<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artiste_Type_Show extends Model
{
    protected $guarded = ['artiste_type_id', 'shows_id'];

    protected $table = 'Artistes_Type_Show';

    public $timestamps = false;

    public function artiste_type(){

    	return $this->hasOne('App\Artiste_Type');
    }

    public function show(){

    	return $this->hasMany('App\Show');
    }

}
