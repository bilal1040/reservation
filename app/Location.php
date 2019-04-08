<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['slug','designation','address','website', 'phone'];

    protected $guarded=['locality_id'];

    protected $table = "locations";

    public $timestamps = false;

    public function locality(){

    	return $this->belongsTo('App\Locality');
    }
}
