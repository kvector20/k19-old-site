<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\mheadline;
use App\Models\mtopic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicsController extends Controller
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
        if (Auth::user()->can('topics.view')) {
            $topics = mtopic::all();
            return view('admin.topics.index', compact('topics'));
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
        if (Auth::user()->can('topics.create')) {
            $headlines = mheadline::all();
            return view('admin.topics.create', compact('headlines'));
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
        if (Auth::user()->can('topics.create')) {
            $this->validate($request, [
                'title' => 'required|string|min:3|unique:mtopics,title',
                'body'=> 'required|string|min:15',
                'pdf'=> 'required|url|min:10',
                'headline' => 'required|exists:mheadlines,id',
                'image' => 'required|image'
            ]);
            $imagePath = $request->image->store('/public/magazine/19/topics');
            $topic = new mtopic;
            $topic->title = $request->title;
            $topic->body = $request->body;
            $topic->pdf = $request->pdf;
            $topic->headline_id = $request->headline;
            $topic->user_id = Auth::id();
            $topic->image = $imagePath;
            $topic->save();
            return redirect('admin/topics')->with(['status' => 'Added Successfully!!']);
        }
        abort(404);
    }

    public function publish(Request $request, mtopic $topic)
    {
        if (Auth::user()->can('topics.publish')) {
            $topic->publish = ($topic->publish !== null) ? null : Carbon::now();
            $topic->save();
            return back();
        }
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mtopic $topic)
    {
        if (Auth::user()->can('topics.view')) {
            return view('admin.topics.show', compact('topic'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(mtopic $topic)
    {
        if (Auth::user()->can('topics.update')) {
            $headlines = mheadline::all();
            return view('admin.topics.edit', compact('headlines', 'topic'));
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
    public function update(Request $request, mtopic $topic)
    {
        if (Auth::user()->can('topics.update')) {
            $topic->title = $request->title;
            $topic->body = $request->body;
            $topic->pdf = $request->pdf;
            $topic->headline_id = $request->headline;
            $topic->save();
            return redirect('admin/topics')->with(['status' => 'Added Successfully!!']);
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
