<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contacts;

class ContactController extends Controller
{
    public function show()
    {
        //dd('saya disini lagi debug');
    	return view('contacts');
    }

    public function post(Request $request)
    {
    	$this->validate($request, [
	        'name' => 'required',
	        'email' => 'required|email',
	        'message' => 'required'
        ]);
 
       Contacts::create($request->all());
 
       return back()->with('success', 'Thanks for contacting us!');
    }
}
