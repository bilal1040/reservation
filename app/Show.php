<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable =['slug', 'title', 'poster_url','bookable', 'price'];

   	protected $guarded =['locality_id'];

   	protected $table = "shows";

   	public $timestamps = false;


    public function location(){

    	return $this->belongsTo('App\Location');
    }
}
