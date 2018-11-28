<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ParticipantsRejectionMail;
use App\Models\Participants19;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Participants19Controller extends Controller
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
        if (Auth::user()->can('participants19.view')) {
            $participants = Participants19::all();
            return view('admin.participants19.index', compact('participants'));
        }
        abort(404);
    }

    public function rejected()
    {
        $academic = Workshop::where('type', 'academic')->get();
        $automotive = Workshop::where('type', 'automotive')->get();
        return view('admin.participants19.rejected', compact('academic', 'automotive'));
    }

    public function rejectedStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'status' => 'required|string',
            'email' => 'required|email',
            'first' => 'required|exists:workshops,id',
        ]);
        $participant = Participants19::where('email', $request->email)->where('first', $request->first)->first();
        // return new ParticipantsRejectionMail($participant, $request->status);
        if (!$participant) {
            $participant = new Participants19;
            $participant->name = $request->name;
            $participant->email = $request->email;
            $participant->first = $request->first;
            $participant->save();
        }
        Mail::to($participant->email)->send(new ParticipantsRejectionMail($participant, $request->status));
        return back()->with(['status' => 'Sent!!']);
    }
}
