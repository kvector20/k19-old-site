<?php

namespace App\Http\Controllers;

use App\Models\Participants19;
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
        // return $participants;
        return view('admin.home', compact('participants_count'));
    }
}
