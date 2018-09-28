<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\permission;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
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
        if (Auth::user()->can('roles.view')) {
            $roles = role::all();
            return view('admin.roles.index', compact('roles'));
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
        if (Auth::user()->can('roles.create')) {
            $permissions = permission::all();
            return view('admin.roles.create', compact('permissions'));
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
        if (Auth::user()->can('roles.create')) {
            $this->validate($request, [
                'position' => 'required|string',
                'committee' => 'required|string',
                'permission.*' => 'required|exists:permissions,id',
            ]);
            $role = new role;
            $role->position = $request->position;
            $role->committee = $request->committee;
            $role->save();
            $role->permissions()->sync($request->permission);
            return back()->with(['status' => 'Added Successfully!!']);
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
    public function edit(role $role)
    {
        if (Auth::user()->can('roles.update')) {
            $permissions = permission::all();
            return view('admin.roles.edit', compact('role', 'permissions'));
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
    public function update(Request $request, role $role)
    {
        if (Auth::user()->can('roles.update')) {
            $this->validate($request, [
                'position' => 'required|string',
                'committee' => 'required|string',
                'permission.*' => 'required|exists:permissions,id',
            ]);
            $role->position = $request->position;
            $role->committee = $request->committee;
            $role->save();
            $role->permissions()->sync($request->permission);
            return redirect('admin/roles')->with(['status' => 'Updated Successfully!!']);
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(role $role)
    {
        if (Auth::user()->can('roles.delete')) {
            $role->delete();
            return back()->with(['status' => 'Deleted Successfully!!']);
        }
        abort(404);
    }
}
