<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventsConteroller extends Controller
{
	public function events()
	{
		return view('user.events.index');
	}

    public function career5()
    {
    	return view('user.events.career5');
    }

    public function opening18()
    {
    	return view('user.events.opening18');
    }

    public function welcome18()
    {
    	return view('user.events.welcome18');
    }
}
