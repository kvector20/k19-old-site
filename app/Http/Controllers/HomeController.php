<?php

namespace App\Http\Controllers;

use App\Models\Participants19;
use App\Models\Workshop;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants_count = Participants19::all()->count();
        $first = Workshop::withCount('participantsFirst')->get();
        $second = Workshop::withCount('participantsSecond')->get();
        return view('admin.home', compact('participants_count', 'first', 'second'));
    }
}
