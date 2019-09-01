<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [

        'login', 'password','firstname','lastname','email','langue','role_id'

    ];
     protected $table='users';

     public $timestamps = true;


     protected $hidden = [
        'password', 'remember_token',
    ];
}
