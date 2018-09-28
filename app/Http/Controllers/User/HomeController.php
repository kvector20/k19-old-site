<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Workshop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('user.index');
    }

    public function about()
    {
    	return view('user.about.about');
    }

    public function workshops()
    {
        $workshops = Workshop::where('type', 'academic')->orWhere('type', 'automotive')->get();
    	return view('user.about.workshops', compact('workshops'));
    }
}
