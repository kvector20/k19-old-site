<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionsController extends Controller
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
        if (Auth::user()->can('permissions.view')) {
            $permissions = permission::all();
            return view('admin.permissions.index', compact('permissions'));
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
        if (Auth::user()->can('permissions.create')) {
            return view('admin.permissions.create');
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
        if (Auth::user()->can('permissions.create')) {
            $this->validate($request, [
                'type' => 'required|string'
            ]);
            $permission = new permission;
            $permission->type = $request->type;
            $permission->save();
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
    public function edit(permission $permission)
    {
        if (Auth::user()->can('permissions.update')) {
            return view('admin.permissions.edit', compact('permission'));
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
    public function update(Request $request, permission $permission)
    {
        if (Auth::user()->can('permissions.update')) {
            $this->validate($request, [
                'type' => 'required|string'
            ]);
            $permission->type = $request->type;
            $permission->save();
            return redirect('admin/permissions')->with('Updated Successfully!!');
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        if (Auth::user()->can('permissions.delete')) {
            $permission->delete();
            return back()->with(['status' => 'Deleted Successfully!!']);
        }
        abort(404);
    }
}
