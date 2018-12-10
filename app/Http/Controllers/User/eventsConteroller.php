<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\MembersSecondRequest;
use App\Http\Requests\OpeningRequest;
use App\Http\Requests\ParticipantsRecruitment19Request;
use App\Models\Event;
use App\Models\MemberSecond;
use App\Models\Opening19;
use App\Models\Participants19;
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
        $academic = Workshop::where('type', 'academic')->get();
        $automotive = Workshop::where('type', 'automotive')->get();
        $event = Event::where('title', 'K\'19 Participants Recruitment')->first();
        return view('user.events.participants19', compact('academic', 'automotive', 'event'));
    }

    public function participants19Store(ParticipantsRecruitment19Request $request)
    {
        $participant = Participants19::create($request->all());
        return redirect()->route('about.workshops')->with(['status' => 'You are registered successfully!!']);
    }

    public function opening19()
    {
        $event = Event::where('title', 'K\'19 Opening')->first();
        return view('user.events.opening19', compact('event'));
    }

    public function opening19Store(OpeningRequest $request)
    {
        $Opening = Opening19::create($request->all());
        return redirect()->route('events')->with(['status' => 'You are registered successfully!!']);
    }

    public function memberssecond19()
    {
        $committees = Workshop::where('type', 'committees.second')->get();
        $event = Event::where('title', 'K\'19 Members Recruitment Second Phase')->first();
        return view('user.events.memberssecond19', compact('committees', 'event'));
    }

    public function memberssecond19Store(MembersSecondRequest $request)
    {
        $member = MemberSecond::create($request->all());
        return back()->with(['status' => 'You are registered successfully!!']);
    }

}
