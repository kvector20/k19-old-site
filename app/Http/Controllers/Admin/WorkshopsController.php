<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WorkshopsController extends Controller
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
        if (Auth::user()->can('workshops.view')) {
            $workshops = Workshop::all();
            return view('admin.workshops.index', compact('workshops'));
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
        if (Auth::user()->can('workshops.create')) {
            return view('admin.workshops.create');
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
                'name' => 'required|string',
                'type' => 'required|string',
                'color' => 'required|string',
                'image' => 'required|image',
                'description' => 'required|string',
            ]);
            $workshop = new Workshop;
            $workshop->name = $request->name;
            $workshop->type = $request->type;
            $workshop->color = $request->color;
            $filePath = $request->image->store('/public/workshops');
            $workshop->image = $filePath;
            $workshop->description = $request->description;
            $workshop->save();
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
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        if (Auth::user()->can('workshops.update')) {
            return view('admin.workshops.edit', compact('workshop'));
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
    public function update(Request $request, Workshop $workshop)
    {
        if (Auth::user()->can('workshops.update')) {
            $this->validate($request, [
                'name' => 'required|string',
                'type' => 'required|string',
                'color' => 'required|string',
                'description' => 'required|string',
            ]);
            $workshop->name = $request->name;
            $workshop->type = $request->type;
            $workshop->color = $request->color;
            if ($request->hasFile('image')) {
                if ($workshop->image) {
                    Storage::delete([$workshop->image]);
                }
                $filePath = $request->image->store('/public/workshops');
                $workshop->image = $filePath;
            }
            $workshop->description = $request->description;
            $workshop->save();
            return redirect('admin/workshops')->with('Updated Successfully!!');
        }
        abort(404);
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
