<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\mComment;
use App\Models\mheadline;
use App\Models\mtopic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class magazineController extends Controller
{
    public function index($month)
    {
    	$headlines = mheadline::with('topics')->get();
    	$recentTopics = mtopic::orderBy('id','desc')
    	->where('publish', '<>', 'null')->limit(5)->get();
    	$topics = mtopic::whereMonth('publish', '=', $month)
    	->where('publish', '<>', 'null')->get();
    	$dt = Carbon::now()->setMonth($month);

    	$months = mtopic::select('id', 'publish')
    		->orderBy('id', 'desc')
			->get()
			->groupBy(function($date) {
			    return Carbon::parse($date->publish)->format('m'); // grouping by months
			});

    	return view('user.magazine.19.index', compact('headlines', 'recentTopics', 'topics', 'dt', 'months'));
    }

    public function index_h(mheadline $headline)
    {
    	$headlines = mheadline::with('topics')->get();
    	$recentTopics = mtopic::orderBy('id','desc')
    	->where('publish', '<>', 'null')->limit(5)->get();
    	$topics = $headline->topics;

    	$months = mtopic::select('id', 'publish')
    		->orderBy('id', 'desc')
			->get()
			->groupBy(function($date) {
			    return Carbon::parse($date->publish)->format('m'); // grouping by months
			});

    	return view('user.magazine.19.index', compact('headlines', 'recentTopics', 'topics', 'headline', 'months'));
    }

    public function topic(mtopic $topic)
    {
    	if ($topic->publish) {
            $topic->views++;
			$topic->save();
			$comments = $topic->comments;
    		return view('user.magazine.19.topic', compact('topic', 'comments'));
    	}
    	abort(404);
    }

    public function comment(Request $request, mtopic $topic)
    {
        $this->validate($request, [
            'name' => 'required|string|min:3',
            'email' => 'required|email|min:3',
            'comment' => 'required|string|min:3',
        ]);
        $comment = new mComment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->body = $request->comment;
        $comment->topic_id = $topic->id;
        $comment->save();
        return back();
    }
}
