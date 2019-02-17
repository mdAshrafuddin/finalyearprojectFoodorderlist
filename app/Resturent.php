<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resturent extends Model
{
    protected $table = 'resturents';
    protected $primaryKey = 'resturant_id';
    protected $fillable = ['resturantName'];
}
