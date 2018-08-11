<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventsConteroller extends Controller
{
	public function events()
	{
		return view('events.events');
	}

    public function career()
    {
    	return view('events.career');
    }
}
