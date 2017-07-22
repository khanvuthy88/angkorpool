<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobIndustry;

class DashboardController extends Controller
{
    public function index()
    {
        $jobs = Job::published()->latest()->take(20)->get();

        return view('employee.dashboard', compact('jobs'));
    }
}
