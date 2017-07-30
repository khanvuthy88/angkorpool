<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\JobIndustry;
use App\JobType;
use App\Province;
use App\Employee;

class JobController extends Controller
{
    public function search(Request $request)
    {
        $jobs = Job::where(function($query) use ($request){
                    if($title = $request->input('title'))
                    {
                        $query->where('title', 'like', '%' . $title . '%');
                    }

                    if($industries = $request->input('industries'))
                    {
                        is_array($industries) ? $query->whereIn('industry_id', $industries)
                                            : $query->where('industry_id', $industries);
                    }

                    if($job_types = $request->input('job_types'))
                    {
                        is_array($job_types) ? $query->whereIn('job_type_id', $job_types)
                                            : $query->where('job_type_id', $job_types);
                    }

                    if($location = $request->input('location'))
                    {
                        is_array($location) ? $query->whereIn('province_code', $location)
                                            : $query->where('province_code', $location);
                    }
                })->paginate(10);

        $industries = JobIndustry::all();
        $job_types = JobType::all();
        $provinces = Province::all();

        return view('employee.job-search',compact('jobs', 'industries', 'job_types', 'provinces'))
                ->with(['old_input' => $request->all()]);
    }

    public function show($id)
    {
        $job = Job::with('type')->find($id);

        return view('employee.job-show', compact('job'));
    }

    public function apply(Job $job)
    {
        employee()->jobs()->attach($job->id);

        return redirect()->route('employee.applied.jobs');
    }

    public function appliedJobs()
    {
        $jobs = employee()->jobs()->get();

        return view('employee.applied-jobs', compact('jobs'));
    }
}
