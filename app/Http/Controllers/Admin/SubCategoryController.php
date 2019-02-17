<?php

namespace App\Http\Controllers\Admin;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::latest()->get();
        $categories = Category::all();
        return view('admin.subCategory.indexSubcategory',compact('subcategories','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = SubCategory::latest()->get();
        $categories = Category::all();
        return view('admin.subCategory.AddSubcategory',compact('subcategories','categories'));
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
            'subCatagoryName' => 'required|unique:sub_categories|min:2|max:60',
           
        ]);
        
        $subcategories = new SubCategory();

        $subcategories->subCatagoryName = $request->subCatagoryName;
       // $categories->slug = str_slug($request->catagoryName);	
       $subcategories->catagoryID	    = $request->catagory;

        $subcategories->save();

        $request->session()->flash('msg','Your SubCategory has been added');


         return redirect()->route('admin.subcategory.index');
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
        $subcategories = SubCategory::find($id);
        $categories = Category::all();
        return view('admin.subCategory.AddSubcategory',compact('subcategories','categories'));
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
            'subCatagoryName' => 'required|min:2|max:6',
           
        ]);
        
        $subcategories = SubCategory::find($id);

        $subcategories->subCatagoryName = $request->subCatagoryName;
       // $categories->slug = str_slug($request->catagoryName);	
       $subcategories->catagoryID	    = $request->catagory;

        $subcategories->save();

        $request->session()->flash('msg','Your SubCategory has been added');


         return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategories = SubCategory::find($id);

        $subcategories->delete();

        session()->flash('msg','Your SubCategory has been deleted');


        return back();

    }
}
