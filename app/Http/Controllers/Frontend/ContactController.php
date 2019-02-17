<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.frontend_contact');
    }

    public function sendContact(Request $request)
    {
        
		$this->validate($request,[

			'coonact_name' => 'required',
			'email' => 'required|email',
			'mobile_number' => 'required',
			'message' => 'required',

        ]);
        
        $contacts = new Contact();

		$contacts->coonact_name = $request->coonact_name;
		$contacts->email = $request->email;
		$contacts->mobile_number = $request->mobile_number;
		$contacts->message = $request->message;

		$contacts->save();
		$request->session()->flash('success', 'You Succesfully store the Contact');
		return redirect()->back();
    }
}
