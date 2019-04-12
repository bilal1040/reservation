<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    protected $fillable = ['login','password','firstname','lastname','email','langue', 'roles_id'];

  //  protected $guarded=['roles_id'];

    protected $table = 'userss';

    public $timestamps = false;

    public function role(){

    	return $this->belongsTo('App\Role');
    }
}
