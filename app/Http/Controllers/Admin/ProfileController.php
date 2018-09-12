<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalInfo;
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
        // return Auth::user()->education->faculty;
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

    public function editExperienceView()
    {
        $experience = Auth::user()->experience;
        return view('admin.profile.experience', compact('experience'));
    }

    public function editExperience(Request $request)
    {
        $this->validate($request, [
            'experience' => 'required|string|min:15',
            'skills' => 'required|string|min:15',
            'courses' => 'required|string|min:15',
            'hobbies' => 'required|string|min:15',
        ]);
        $experience = Auth::user()->experience;
        if (!$experience) {
            $experience = new Experience;
        }
        $experience->experience = $request->experience;
        $experience->skills = $request->skills;
        $experience->courses = $request->courses;
        $experience->hobbies = $request->hobbies;
        $experience->user_id = Auth::id();
        $experience->save();
        return redirect('admin/profile')->with(['status' => 'Updated Successfully!!']);
    }

    public function editEducationView()
    {
        $education = Auth::user()->education;
        return view('admin.profile.education', compact('education'));
    }

    public function editEducation(Request $request)
    {
        $this->validate($request, [
            'academic_year' => 'required|string|min:3',
            'faculty' => 'required|string|min:3',
            'department' => 'required|string|min:3',
            'university' => 'required|string|min:3',
        ]);
        $education = Auth::user()->education;
        if (!$education) {
            $education = new Education;
        }
        $education->academic_year = $request->academic_year;
        $education->faculty = $request->faculty;
        $education->department = $request->department;
        $education->university = $request->university;
        $education->user_id = Auth::id();
        $education->save();
        return redirect('admin/profile')->with(['status' => 'Updated Successfully!!']);
    }

    public function editInfoView()
    {
        $personalInfo = Auth::user()->personalInfo;
        return view('admin.profile.info', compact('personalInfo'));
    }

    public function editInfo(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|string|min:11',
            'date_of_birth' => 'required|date|before:today',
            'address' => 'required|string|min:3',
            'objectives' => 'required|string|min:11',
        ]);
        $personalInfo = Auth::user()->personalInfo;
        if (!$personalInfo) {
            $personalInfo = new PersonalInfo;
        }
        $personalInfo->phone = $request->phone;
        $personalInfo->date_of_birth = $request->date_of_birth;
        $personalInfo->address = $request->address;
        $personalInfo->objectives = $request->objectives;
        $personalInfo->user_id = Auth::id();
        $personalInfo->save();
        return redirect('admin/profile')->with(['status' => 'Updated Successfully!!']);
    }

}
