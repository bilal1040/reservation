<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $filliable = ['categorie'];
    protected $table = 'category';
    public $timestamps = false;


     public function show(){

    	return $this->hasOne('App\Show');
    }
}
