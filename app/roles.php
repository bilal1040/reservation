<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $filliable = ['role'];

    protected $table = 'roles';

    public $timestamps =false;
}
