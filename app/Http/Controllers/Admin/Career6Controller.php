<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CWorkshop;
use App\Models\Career6;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
