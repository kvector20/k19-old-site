<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participants19;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Participants19Controller extends Controller
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
        if (Auth::user()->can('participants19.view')) {
            $participants = Participants19::all();
            return view('admin.participants19.index', compact('participants'));
        }
        abort(404);
    }
}
