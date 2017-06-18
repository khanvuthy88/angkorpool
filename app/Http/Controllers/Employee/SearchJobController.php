<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobIndustry;
use App\JobType;

class SearchJobController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->get();
        $industries = JobIndustry::all();
        $job_types = JobType::all();

        return view('employee.job-search', compact('jobs', 'industries', 'job_types'));
    }
}
