<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Job;
use App\JobIndustry;
use App\JobType;
use App\JobOpeningStatus;
use App\Province;

class JobController extends Controller
{
    public function create()
    {
        $industries = JobIndustry::all();
        $job_types = JobType::all();
        $job_opening_statuses = JobOpeningStatus::all();
        $provinces = Province::orderBy('name')->get();

        return view('employer.job-create', compact('industries', 'job_types', 'job_opening_statuses', 'provinces'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'industry' => 'required',
            'job-opening-status' => 'required',
            'job-type' => 'required',
            'closing-date' => 'required|date|after:today',
        ]);

        $job = Job::create([
            'emp_id' => auth()->user()->id,
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            //'published_date' => $request->get('title'),
            'closing_date' => $request->get('closing-date'),
            'industry_id' => $request->get('industry'),
            'salary' => $request->get('salary'),
            'status' => $request->get('job-opening-status'),
            'city' => $request->get('city'),
            'province_code' => $request->get('location'),
            'work_experience' => $request->get('work-experience'),
            'job_type_id' => $request->get('job-type'),
            'number_of_positions' => $request->get('number-of-position'),
        ]);

        return view('employer.job-show', compact('job'));
    }

    public function show($id)
    {
        $job = Job::with('type')
                    ->where('id', $id)
                    ->where('emp_id', auth()->user()->id)
                    ->firstOrFail();

        return view('employer.job-show', compact('job'));
    }

    public function publish($id)
    {
        $job = Job::with(['type', 'province'])
                    ->where('id', $id)
                    ->where('emp_id', auth()->user()->id)
                    ->firstOrFail();

        $job->published_date = Carbon::now();
        $job->save();

        return redirect()->back();
    }
}
