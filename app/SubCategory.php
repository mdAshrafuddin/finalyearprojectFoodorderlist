<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   

   protected $table = 'sub_categories';
    protected $primaryKey = 'subCatagoryID';
    protected $fillable = ['subCatagoryName', 'catagoryID'];

    public function catagory()
    {
        //return $this->belongsTo('App\Catagory', 'catagoryID');
        return $this->belongsTo('App\Category','catagoryID');
    }

    public function fooditems()
    {
      return $this->hasMany('App\FoodItem');
    }

}