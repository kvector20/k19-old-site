<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberSecond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembersSecondController extends Controller
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
        if (Auth::user()->can('memberssecond.view')) {
            $members = MemberSecond::all();
            return view('admin.memberssecond.index', compact('members'));
        }
        abort(404);
    }
}
