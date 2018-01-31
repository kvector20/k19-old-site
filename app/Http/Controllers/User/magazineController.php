<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class magazineController extends Controller
{
    public function index()
    {
    	return view('magazine.magazine');
    }
}
