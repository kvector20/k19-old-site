<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
    	return view('user.contact.index');
    }

    public function store(Request $request)
    {
    	return $request->all();
    }
}
