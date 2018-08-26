<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    	return view('user.contact.index');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|string|min:3',
    		'email' => 'required|email|min:3',
    		'subject' => 'required|string|min:3',
    		'message' => 'required|string|min:15',
    	]);
    	// return $request->name;
    	$contact = new Contact;
    	$contact->create($request->all());
    	return back()->with(['status' => 'Sent Successfully!!']);
    }
}
