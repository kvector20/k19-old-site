<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Workshop;
use Illuminate\Http\Request;

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

    public function participants19()
    {
        $workshops = Workshop::where('type', 'academic')->get();
        $event = Event::where('title', 'K\'19 Participants Recruitment')->first();
        return view('user.events.participants19', compact('workshops', 'event'));
    }

    public function participants19Store(Request $request)
    {
        return $request->all();
    }
}
