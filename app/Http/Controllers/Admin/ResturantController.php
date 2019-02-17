<?php


namespace App\Http\Controllers\Admin;

use App\Resturent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resturants = Resturent::all();
        return view('admin.resturant.resturant_index',compact('resturants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resturants = Resturent::all();
        return view('admin.resturant.resturant_add',compact('resturants'));
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
            'resturantName' => 'required|min:2|max:6',
           
        ]);
        
        $resturants = new Resturent();

        $resturants->resturantName = $request->resturantName;
       // $categories->slug = str_slug($request->catagoryName);	

        $resturants->save();

        $request->session()->flash('msg','Your Category has been updated');


         return redirect()->route('admin.resturant.index');
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
        $resturants = Resturent::find($id);
        return view('admin.resturant.resturant_add',compact('resturants'));
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
            'resturantName' => 'required|min:2|max:6',
           
        ]);
        
        $resturants = Resturent::find($id);

        $resturants->resturantName = $request->resturantName;
       // $categories->slug = str_slug($request->catagoryName);	

        $resturants->save();

        $request->session()->flash('msg','Your Resturant has been updated');


         return redirect()->route('admin.resturant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resturants = Resturent::find($id);
        $resturants->delete();

        session()->flash('msg','Your Resturant has been Deleted');


         return back();
    }
}
