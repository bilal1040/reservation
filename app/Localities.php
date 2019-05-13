<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localities extends Model
{
    protected $filliable = ['postal_code','localities'];


    protected $table = 'Localities';


    public $timestamps = false;
}
