<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingupController extends Controller
{
    public function index()
    {
        return view('frontend.account.singup');
    }

    public function store(Request $request)
	{
		//Validation

		$this->validate($request,[

			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed',
			
		]);

		//Save the data

		$user = User::create([


			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password) ,
			

		]);

		//sing the user in

		auth()->login($user);

		//Redirect to

		return redirect()->route('frontend.customer');
	}
}
