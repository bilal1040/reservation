<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    protected $fillable = ['when'];

    protected $guarded = ['shows_id', 'locations_id'];

    protected $table = "representations";

    public $timestamps = false;

    public function show (){

    	return $this->hasMany('App\Show');
    }

    public function location(){

    	return $this->hasMany('App\Location');
    }

    public function representation_user(){

        return $this->belongsToMany('App\Representation_user');
    }
}
