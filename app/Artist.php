<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
travail de Bilalit
*/

class Artist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     public function artiste_type(){

        return $this->hasMany('App\Artiste_type');
    }
}

