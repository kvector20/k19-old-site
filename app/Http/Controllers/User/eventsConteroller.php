<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\MembersSecondRequest;
use App\Http\Requests\OpeningRequest;
use App\Http\Requests\ParticipantsRecruitment19Request;
use App\Mail\Career6ConfirmationMail;
use App\Models\CWorkshop;
use App\Models\Career6;
use App\Models\Event;
use App\Models\MemberSecond;
use App\Models\Opening19;
use App\Models\Participants19;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    public function career6()
    {
        $event = Event::where('title', 'Career Launcher 6')->first();
        return view('user.events.career6.career6', compact('event'));
    }

    public function career6form($form)
    {
        if (in_array($form, [
            'juniors', 'civil', 'general', 'mech', 'elec', 'bio', 'com', 'fair'
        ])) {
            $sessions = CWorkshop::where('category', $form)->where('status', 1)->get();
            return view('user.events.career6.form', compact('form', 'sessions'));
        }
        abort(404);
    }

    public function career6Store(Request $request)
    {
        $session = $request->session;
        $this->validate($request, [
            'name' => 'required|string|min:2',
            'session' => 'required|exists:c_workshops,id',
            'email' => [
                'required',
                'email',
                Rule::unique('career6s')->where(function ($query) use($session) {
                    return $query->where('session', $session);
                }),
            ],
            'phone' => 'required|string|max:11',
            'national_id' => 'required_unless:form,juniors|string|max:14|min:14',
            'facebook_link' => 'required|url',
            'university' => 'required|string|min:2',
            'faculty' => 'required_unless:form,juniors|string|min:2',
            'department' => 'required_unless:form,juniors|string|min:2',
            'academic_year' => 'required|string|min:2',
            'bus' => 'required'
        ]);
        $participant = Career6::create($request->all());
        // Mail::to($participant->email)->send(new Career6ConfirmationMail($participant->name, $participant->session));
        return back()->with(['status' => 'You are registered successfully!!']);
    }

}
