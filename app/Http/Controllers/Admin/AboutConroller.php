<?php

namespace App\Http\Controllers\Admin;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::latest()->get();
     
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts = About::all();
     
        return view('admin.about.addAbout',compact('abouts'));
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
            'title' => 'required|unique:abouts|min:2|max:6',
            'description' => 'required|unique:abouts|min:2|max:6',
           
        ]);
        
        $abouts = new About();

        $abouts->title = $request->title;
        $abouts->description = $request->description;
        $abouts->slug = str_slug($request->title);	

        $abouts->save();

        $request->session()->flash('msg','Your about has been added');


         return redirect()->route('admin.about.index');
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
        $abouts = About::find($id);
     
        return view('admin.about.edit',compact('abouts'));
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
            'title' => 'required|unique:abouts|min:2|max:6',
            'description' => 'required|unique:abouts|min:2|max:6',
           
        ]);
        
        $abouts = About::find($id);

        $abouts->title = $request->title;
        $abouts->description = $request->description;
        $abouts->slug = str_slug($request->title);	

        $abouts->save();

        $request->session()->flash('msg','Your about has been added');


         return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts = About::find($id);

        $abouts->delete();

        session()->flash('msg','Your SubCategory has been deleted');


        return back();
    }
}
