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

    public function show($id)
    {
        $job = Job::with('type')->find($id);

        return view('job-show', compact('job'));
    }
}
