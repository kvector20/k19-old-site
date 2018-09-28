<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
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
        if (Auth::user()->can('events.view')) {
            $events = Event::all();
            return view('admin.events.index', compact('events'));
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
        if (Auth::user()->can('events.create')) {
            return view('admin.events.create');
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
        if (Auth::user()->can('events.create')) {
            $this->validate($request, [
                'title' => 'required|string',
                'start_date' => 'required|date',
                'end_date' => 'required|date'
            ]);
            $request['start_date'] .= ' ' . $request->start_time;
            $request['end_date'] .= ' ' . $request->end_time;
            $request['start_date'] = Carbon::parse($request->start_date, 'UTC');
            $request['end_date'] = Carbon::parse($request->end_date, 'UTC');
            // return $request->all();
            $event = new Event;
            $event->title = $request->title;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->save();
            return back()->with('Added Successfully!!');
        }
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
