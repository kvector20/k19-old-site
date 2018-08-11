<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.profile.index');
    }

    public function updatePhoto(Request $request)
    {
    	$this->validate($request, [
    		'profile_photo' => 'required|image',
    	]);

    	$filePath = $request->profile_photo->store('/public/admins/' . Auth::id());
        // update admin data
        $admin = User::find(Auth::id());
        $admin->image = $filePath;
        $admin->save();

        return back();
    }


    public function update(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|string|min:3',
    		'email' => [
    			'required',
    			'email',
    			Rule::unique('users')->ignore(Auth::id()),
    		],
    	]);
    	$admin = User::find(Auth::id());
    	$admin->update($request->all());
    	return back()->with(['status' => 'Updated Successfully!!']);
    }

    public function password(Request $request)
    {
    	$this->validate($request, [
    		'password' => 'required|string|min:6|confirmed'
    	]);
    	$admin = User::find(Auth::id());
    	if (Hash::check($request->old_password, $admin->password)) {
    		$admin->password = Hash::make($request->password);
    		$admin->save();
    		return back()->with(['status' => 'Password Updated Successfully!!']);
    	}
    	return back()->with(['error' => 'Old password not correct']);
    }
}
