<?php

namespace App\Http\Controllers\Admin;


use File;

use Carbon\Carbon;
use App\FoodItem;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fooditems = FoodItem::all();
        $subcategories = SubCategory::all();
        return view('admin.fooditem.fooditem_index',compact('fooditems','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fooditems = FoodItem::all();
        $subcategories = SubCategory::all();
        return view('admin.fooditem.fooditem_add',compact('fooditems','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'food_name' => 'required|min:2|max:60',
            'price' => 'required',
            'food_tag' => 'required',
            'food_description' => 'required',
            'images' => 'required|mimes:jpeg,bmp,png,gif,svg,pdf',
           
        ]);
        $image = $request->file('images');

		if (isset($image))
		{
			$currentDate = Carbon::now()->toDateString();

			$iamgeName = $slug.'-'.$currentDate.'-'.uniqid().'-'.
				$image->getClientOriginalName();

			if (!file_exists('fooditems'))
			{
				mkdir('fooditems', 0777,true);
			}
			$image->move('fooditems/', $iamgeName);
		}else{
			$iamgeName = "Default.png";
        }
        
        $fooditems = new FoodItem();

        $fooditems->food_name = $request->food_name;
        $fooditems->price = $request->price;
        $fooditems->food_tag = $request->food_tag;
        $fooditems->food_description = $request->food_description;
        $fooditems->images = $iamgeName;
       // $categories->slug = str_slug($request->catagoryName);	
        $fooditems->subCatagoryID	    = $request->subcatagory;

        $fooditems->save();

        $request->session()->flash('msg','Your FoodItem has been added');


         return redirect()->route('admin.fooditem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fooditems = FoodItem::find($id);
        $subcategories = SubCategory::all();
        return view('admin.fooditem.fooditem_edit',compact('fooditems','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'food_name' => 'required|min:2|max:60',
            'price' => 'required',
            'food_tag' => 'required',
            'food_description' => 'required',
           
        ]);
        
        $fooditems = FoodItem::find($id);

        $image = $request->file('images');

		if (isset($image))
		{
			$currentDate = Carbon::now()->toDateString();

			$iamgeName = $slug.'-'.$currentDate.'-'.uniqid().'-'.
				$image->getClientOriginalName();

			if (!file_exists('fooditems'))
			{
				mkdir('fooditems', 0777,true);
			}
			$image->move('fooditems/', $iamgeName);
		}else{
			$iamgeName = "Default.png";
        }

        $fooditems->food_name = $request->food_name;
        $fooditems->price = $request->price;
        $fooditems->food_tag = $request->food_tag;
        $fooditems->food_description = $request->food_description;
        $fooditems->images = $iamgeName;
       // $categories->slug = str_slug($request->catagoryName);	
        $fooditems->subCatagoryID	    = $request->subcatagory;

        $fooditems->save();

        $request->session()->flash('msg','Your FoodItem has been added');


         return redirect()->route('admin.fooditem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
