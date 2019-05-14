<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'login', 'email', 'password','firstname','lastname','role_id','langue'
=======
        'login', 'password','firstname','lastname','email', 'langue', 'role_id'
>>>>>>> aefc0ef5e2d62afbce6b5356cdc46ec9493606dc
    ];

    protected $table='users';

    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

<<<<<<< HEAD
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;
=======
    public function role(){

        return $this->belongsTo('App\Role');
    }
>>>>>>> aefc0ef5e2d62afbce6b5356cdc46ec9493606dc
}
