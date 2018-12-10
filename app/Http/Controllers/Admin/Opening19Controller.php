<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OpeningMail;
use App\Models\Ad;
use App\Models\Opening19;
use App\Models\Participants19;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Opening19Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if (auth()->user()->can('Opening19.view')) {
	    	$participants = Opening19::all();
	    	return view('admin.events.opening19.index', compact('participants'));
        }
        abort(404);
    }

    public function mail()
    {
    	if (auth()->user()->can('Opening19.mail')) {
    		$users = Participants19::whereNotIn('email', function($query) {
    			$query->select('email')->from('ads');
    		})->get(["name", "email"]);
        	// return new OpeningMail($users[0]);
	    	foreach ($users as $user) {
	    		Mail::to($user->email)->send(new OpeningMail($user));
                echo "sent to " . $user->email  . "<br>";
	    		$ad = new Ad;
	    		$ad->email = $user->email;
	    		$ad->ad_name = "opening";
	    		$ad->save();
	    	}
	    	return back();
        }
        abort(404);
    }

    public function file()
    {
        $users = Opening19::all();
        Storage::disk('local')->put('Opening19.xlsx', 'Id, Name, E-Mail, Mobile');
        foreach ($users as $user) {
            Storage::disk('local')->append('Opening19.xlsx', $user->id . ', ' . $user->name . ', ' . $user->email . ', ' . $user->phone);
        }
        return $users;
    }
}
