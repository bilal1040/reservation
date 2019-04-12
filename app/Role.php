<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role'];

    protected $table = 'roles';

    public $timestamps = false;

     public function userss(){

    	return $this->hasMany('App\Userss');
    }

}
