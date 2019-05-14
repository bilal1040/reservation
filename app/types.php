<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class types extends Model
{
    protected $filliable = ['type'];

    protected $table = 'types';

    public $timestamps = false;
}
