<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminsController extends Controller
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
        if (Auth::user()->can('admins.view')) {
            $admins = User::all();
            return view('admin.admins.index', compact('admins'));
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
        if (Auth::user()->can('admins.create')) {
            $roles = role::all();
            return view('admin.admins.create', compact('roles'));
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
        if (Auth::user()->can('admins.create')) {
            $this->validate($request, [
                'name'=> [
                    'string',
                    'required',
                    'max:30',
                    'min:3',
                ],
                'email'=> [
                    'email',
                    'required',
                    'max:100',
                    Rule::unique('users'),
                ],
                'role'=> 'required|integer|exists:roles,id',
                'password'=> 'string|required|confirmed',
            ]);
            $request['password'] = Hash::make($request->password);
            User::create($request->all());
            return redirect('admin/admins')->with('status', 'Added Successfully');
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
    public function edit(User $admin)
    {
        if (Auth::user()->can('admins.update')) {
            $roles = role::all();
            return view('admin.admins.edit', compact('admin', 'roles'));
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
    public function update(Request $request, User $admin)
    {
        if (Auth::user()->can('admins.update')) {
            $this->validate($request, [
                'name'=> [
                    'string',
                    'required',
                    'max:30',
                    'min:3',
                ],
                'email'=> [
                    'email',
                    'required',
                    'max:100',
                    Rule::unique('users')->ignore($admin->id),
                ],
                'role'=> 'required|integer|exists:roles,id',
            ]);
            $admin->update($request->all());
            return redirect('admin/admins')->with('status', 'Updated Successfully');
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        if (Auth::user()->can('admins.delete')) {
            $admin->delete();
            return back()->with(['status' => 'Deleted Successfully!!']);
        }
        abort(404);
    }
    
    public function activate(Request $request, User $admin)
    {
        $admin->active = !($admin->active);
        $admin->save();
        return back()->with(['status' => 'Updated Successfully!!']);
    }
}
