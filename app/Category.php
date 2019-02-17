<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'catagoryID';
    protected $fillable = ['catagoryName','slug'];

    public function subcategories(){
       // return $this->hasMany('App\SubCategory','category_id');
        // return $this->hasMany(SubCategory::class);
        return $this->hasMany('App\SubCategory');
    }

    public function abouts() {
        return $this -> hasOne(About::class);
      }
}
