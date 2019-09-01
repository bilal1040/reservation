<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable =['slug', 'title', 'description','bookable', 'price'];

   	protected $guarded =['locations_id'];

   	protected $table = "shows";

   	public $timestamps = false;


    public function location(){

    	return $this->belongsTo('App\Location');
    }

    public function artiste_type_show(){

    	return $this->belongsTo('App\artiste_type_show');
    }

    public function representation(){

      return $this->belongsTo('App\Representation');
    }

    public function category(){

      return $this->belongsTo('App\Category');
    }
}
