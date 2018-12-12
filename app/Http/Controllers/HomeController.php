<?php

namespace App\Http\Controllers;

use App\Models\MemberSecond;
use App\Models\Opening19;
use App\Models\Participants19;
use App\Models\Workshop;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants_count = Participants19::all()->count();
        $memberssecond_count = MemberSecond::all()->count();
        $first = Workshop::where('type', 'academic')->orWhere('type', 'automotive')->withCount('participantsFirst')->get();
        $second = Workshop::where('type', 'academic')->orWhere('type', 'automotive')->withCount('participantsSecond')->get();

        $first_member = Workshop::where('type', 'committees.second')->withCount('membersFirst')->get();
        $second_member = Workshop::where('type', 'committees.second')->withCount('membersSecond')->get();

        $days_dist = Participants19::select('created_at')
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m:d'); // grouping by months
            });
        $iqs_dist_days = Participants19::select('iq_test_day', 'iq_test_hour')
            ->where('iq_test_hour', '<>', null)
            ->get()
            ->groupBy('iq_test_day');
        $iqs_dist_hours = Participants19::select('iq_test_hour', 'iq_test_hour')
            ->where('iq_test_hour', '<>', null)
            ->get()
            ->groupBy('iq_test_hour');

        $opening_count = Opening19::all()->count();

        return view('admin.home', compact('memberssecond_count','opening_count', 'participants_count', 'first', 'second', 'days_dist', 'iqs_dist_days', 'iqs_dist_hours', 'first_member', 'second_member'));
    }
}
