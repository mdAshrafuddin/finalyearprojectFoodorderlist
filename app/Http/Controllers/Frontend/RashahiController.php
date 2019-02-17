<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RashahiController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('frontend.city.rajshahi',compact('categories','subcategories'));
    }
}
