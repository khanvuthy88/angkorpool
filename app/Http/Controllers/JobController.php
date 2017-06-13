<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
	public function index()
	{
		$jobs = Job::where('user_id', auth()->user()->id)
					->latest()
					->get();

		return view('job', compact('jobs'));
	}

    public function create()
    {
    	return view('job-create');
    }

    public function show(Job $job)
    {
        return view('job-show', compact('job'));
    }
}
