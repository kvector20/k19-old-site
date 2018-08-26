<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function academic()
    {
    	return view('user.projects.academic');
    }

    public function events()
    {
    	return view('user.projects.events');
    }

    public function magazine()
    {
    	return view('user.projects.magazine');
    }

    public function juniors()
    {
    	return view('user.projects.juniors');
    }
}
