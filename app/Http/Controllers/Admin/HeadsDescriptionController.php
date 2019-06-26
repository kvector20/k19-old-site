<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HeadsDescription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HeadsDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('headsDescription.view')) {
            $headsDescription = HeadsDescription::all();
            return view('admin.headsDescription.index', compact('headsDescription'));
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
        if (Auth::user()->can('headsDescription.create')) {
            return view('admin.headsDescription.create');
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
        if (Auth::user()->can('headsDescription.create')) {
            $this->validate($request, [
                'name' => 'required|string',
                'photo' => 'required|image',
                'description' => 'required|string',
            ]);
            $filePath = $request->photo->store('/public/heads');
            $request['image'] = $filePath;
            HeadsDescription::create($request->all());
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
