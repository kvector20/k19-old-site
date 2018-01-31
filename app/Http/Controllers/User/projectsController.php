<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function academic()
    {
    	$project = 'academic';
    	return view('projects.academic', compact('project'));
    }

    public function events()
    {
    	$project = 'events';
    	return view('projects.events', compact('project'));
    }

    public function magazine()
    {
    	$project = 'magazine';
    	return view('projects.magazine', compact('project'));
    }

    public function juniors()
    {
    	$project = 'juniors';
    	return view('projects.juniors', compact('project'));
    }
}
