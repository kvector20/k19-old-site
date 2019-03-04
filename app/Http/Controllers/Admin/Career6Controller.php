<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Career6InvitationMail;
use App\Models\Ad;
use App\Models\CWorkshop;
use App\Models\Career6;
use App\Models\MemberSecond;
use App\Models\Opening19;
use App\Models\Participants19;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Career6Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('career6.view')) {
            $participants = Career6::all();
            return view('admin.career6.index', compact('participants'));
        }
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('career6.session')) {
            return view('admin.career6.create');
        }
        abort(404);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->can('career6.session')) {
            $this->validate($request, [
                'name' => 'required|string',
                'company' => 'required|string',
                'category' => 'required|string',
            ]);
            $session = new CWorkshop;
            $session->name = $request->name;
            $session->company = $request->company;
            $session->category = $request->category;
            $session->description = $request->description;
            $session->save();
            return back()->with('Added Successfully!!');
        }
        abort(404);
    }

    public function status(Request $request, CWorkshop $session)
    {
        if (Auth::user()->can('career6.session')) {
            $this->validate($request, [
                'status' => 'sometimes|boolean',
            ]);
        	// return $request->all();
            $session->status = (isset($request->status)) ? 1 : 0;
            $session->save();
            return back()->with('Updated Successfully!!');
        }
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sessions()
    {
        if (Auth::user()->can('career6.session')) {
            $sessions = CWorkshop::all();
            return view('admin.career6.sessions', compact('sessions'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CWorkshop $session)
    {
        if (Auth::user()->can('career6.session')) {
            $categories = [
                'juniors' => 'Juniors (School Students)',
                'civil' => 'Civil and Architecture Engineering',
                'general' => 'General',
                'mech' => 'Mechanical Engineering',
                'elec' => 'Electrical Engineering',
                'bio' => 'Biomedical Engineering',
                'com' => 'Computer and Communication Engineering',
                'fair' => 'Fair',
            ];
            return view('admin.career6.edit', compact('session', 'categories'));
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CWorkshop $session)
    {
        if (Auth::user()->can('career6.session')) {
            $this->validate($request, [
                'name' => 'required|string',
                'company' => 'required|string',
                'category' => 'required|string',
            ]);
            $session->name = $request->name;
            $session->company = $request->company;
            $session->category = $request->category;
            $session->description = $request->description;
            $session->save();
            return redirect()->route('career6.session')->with('status', 'Updated Successfully');
        }
        abort(404);
    }

    public function mail()
    {
        if (auth()->user()->can('career6.session')) {
            $users = Participants19::whereNotIn('email', function($query) {
                $query->select('email')->from('ads')->where('ad_name', 'Career6');
            })->get(["name", "email"]); 
            $new_users = Opening19::whereNotIn('email', function($query) {
                $query->select('email')->from('ads')->where('ad_name', 'Career6');
            })->get(["name", "email"]);
            $users = $users->concat($new_users);
            $new_users = MemberSecond::whereNotIn('email', function($query) {
                $query->select('email')->from('ads')->where('ad_name', 'Career6');
            })->get(["name", "email"]);
            $users = $users->concat($new_users);
            // return new OpeningMail($users[0]);
            foreach ($users as $user) {
                Mail::to($user->email)->send(new Career6InvitationMail($user->name));
                echo "sent to " . $user->email  . "<br>";
                $ad = new Ad;
                $ad->email = $user->email;
                $ad->ad_name = "Career6";
                $ad->save();
            }
            return back();
        }
        abort(404);
    }

    public function file()
    {
        $users = Career6::where('id', '>', 1083)->get();
        Storage::disk('local')->put('Career6.xls', 'Id, Name, University, Faculty, Department');
        foreach ($users as $user) {
            Storage::disk('local')->append('Career6.xls', $user->id . ', ' . $user->name . ', ' . $user->national_id . ', ' . $user->phone);
        }
        return $users;
    }
}
