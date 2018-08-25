<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\mheadline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class HeadlinesController extends Controller
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
        if (Auth::user()->can('headlines.view')) {
            $headlines = mheadline::all();
            return view('admin.headlines.index', compact('headlines'));
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
        if (Auth::user()->can('headlines.create')) {
            return view('admin.headlines.create');
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
        if (Auth::user()->can('headlines.create')) {
            $this->validate($request, [
                'name' => 'required|string|min:3|unique:mheadlines,name',
            ]);
            $headline = new mheadline;
            $headline->name = $request->name;
            $headline->save();
            return redirect('admin/headlines')->with(['status' => 'Added Successfully!!']);
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
    public function edit(mheadline $headline)
    {
        if (Auth::user()->can('headlines.update')) {
            return view('admin.headlines.edit', compact('headline'));
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
    public function update(Request $request, mheadline $headline)
    {
        if (Auth::user()->can('headlines.update')) {
            $this->validate($request, [
                'name' => [
                    'required',
                    'string',
                    'min:3',
                    Rule::unique('mheadlines')->ignore($headline->id)
                ],
            ]);
            $headline->name = $request->name;
            $headline->save();
            return redirect('admin/headlines')->with(['status' => 'Updated Successfully!!']);
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(mheadline $headline)
    {
        if (Auth::user()->can('headlines.delete')) {
            $headline->delete();
            return back()->with(['status' => 'Deleted Successfully!!']);
        }
        abort(404);
    }
}
