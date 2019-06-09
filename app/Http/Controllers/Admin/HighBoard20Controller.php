<?php

namespace App\Http\Controllers\Admin;

use App\Models\Highboard20;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HighBoard20Controller extends Controller
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
        if (Auth::user()->can('highboard20.view')) {
            $applicants = Highboard20::all();
            return view('admin.highboard20.index', compact('applicants'));
        }
        abort(404);
    }

}
