<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Career6CompaniesMail;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->can('contact.view')) {
            $contacts = Contact::orderBy('id', 'desc')->paginate(20);
            $unread = Contact::where('seen_by_id', null)->count();
            return view('admin.contacts.index', compact('contacts', 'unread'));
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
        if (auth()->user()->can('contact.create')) {
            $unread = Contact::where('seen_by_id', null)->count();
            return view('admin.contacts.create', compact('unread'));
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
        if (auth()->user()->can('contact.create')) {
            $this->validate($request, [
                'to' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);
            Mail::to($request->to)->send(new Career6CompaniesMail($request->subject, $request->message));
            return back()->with(['status' => 'Sent']);
        }
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        if (auth()->user()->can('contact.view')) {
            if (!$contact->seen_by_id) {
                $contact->seen_by_id = Auth::id();
                $contact->seen_at = Carbon::now();
                $contact->save();
            }
            $unread = Contact::where('seen_by_id', null)->count();
            return view('admin.contacts.show', compact('contact', 'unread'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
