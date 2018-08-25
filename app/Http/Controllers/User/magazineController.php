<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\mheadline;
use App\Models\mtopic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class magazineController extends Controller
{
    public function index($month)
    {
    	$headlines = mheadline::with('topics')->get();
    	$recentTopics = mtopic::orderBy('id','desc')
    	->where('publish', '<>', 'null')->limit(5)->get();
    	$topics = mtopic::whereMonth('publish', '=', Carbon::now()->month)
    	->where('publish', '<>', 'null')->get();
    	// return $topics;
    	return view('user.magazine.19.index', compact('headlines', 'recentTopics', 'topics'));
    }
}
