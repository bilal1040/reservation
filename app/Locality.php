<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $fillable = ['postal_code', 'locality'];

    protected $table = 'localitys';

    public $timestamps = false;

    public function locations(){

    	return $this->hasMany('App\Location');
    }

}
