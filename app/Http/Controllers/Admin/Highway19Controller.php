<?php

namespace App\Http\Controllers\Admin;

use App\Highway;
use App\Helpers\Helpers;
use App\Models\CWorkshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Highway19Controller extends Controller
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
        if (Auth::user()->can('highway.view')) {
            $applicants = Highway::all();
            return view('admin.highway.index', compact('applicants'));
        }
        abort(404);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (Auth::user()->can('highway.view')) {
            $interns = CWorkshop::all();
            return view('admin.highway.show', compact('interns'));
        }
        abort(404);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request)
    {
        if (Auth::user()->can('highway.view')) {
            $applicants = Highway::where('session', $request->intern)->get();
            Storage::disk('local')->put($request->file_name . '.xls', 'Name, Email, Phone, National id, Facebook profile, University, Faculty, Academic year, Department, CV link');
            foreach ($applicants as $applicant) {
                Storage::disk('local')->append($request->file_name . '.xls', $applicant->name . ', ' . $applicant->email . ', ' . $applicant->phone . ', ' . $applicant->national_id . ', ' . $applicant->facebook_link . ', ' . $applicant->university . ', ' . $applicant->faculty . ', ' . $applicant->academic_year . ', ' . $applicant->department . ', ' . env('APP_URL') . Helpers::storage($applicant->cv_file));
            }
            return back()->with(['status' => 'Done']);
        }
        abort(404);
    }
}
