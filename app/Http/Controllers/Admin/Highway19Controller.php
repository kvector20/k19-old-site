<?php

namespace App\Http\Controllers\Admin;

use App\Highway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Highway19Controller extends Controller
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
        if (Auth::user()->can('highway.view')) {
            $applicants = Highway::all();
            return view('admin.highway.index', compact('applicants'));
        }
        abort(404);
    }
}
