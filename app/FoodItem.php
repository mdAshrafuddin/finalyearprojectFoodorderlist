<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $table = 'food_items';
    protected $primaryKey = 'foodItem_id';
    protected $fillable = ['food_name', 'images','food_description','price','food_tag','subCatagoryID'];

    public function subcatagory()
    {
        //return $this->belongsTo('App\Catagory', 'catagoryID');
        return $this->belongsTo('App\SubCategory','subCatagoryID');
    }
}
