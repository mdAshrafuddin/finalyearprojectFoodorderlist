<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $primaryKey = 'about_id';
    protected $fillable = ['title','description','catagoryID'];

    public function catagory()
    {
        //return $this->belongsTo('App\Catagory', 'catagoryID');
        return $this->belongsTo('App\Category','catagoryID');
}
}
