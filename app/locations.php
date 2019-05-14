<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    protected $filliable = ['designation','address','website','phone'];

    protected $table = 'locations';

    public $timestamps = false;
}
