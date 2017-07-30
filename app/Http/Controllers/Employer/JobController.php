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
    public function index()
    {
        $jobs = employer()->jobs()->latest()->paginate(10);

        return view('employer.jobs-posted', compact('jobs'));
    }

    public function create()
    {
        $industries = JobIndustry::all();
        $job_types = JobType::all();
        $job_opening_statuses = JobOpeningStatus::all();
        $provinces = Province::orderBy('name')->get();

        return view('employer.job-create', compact('industries', 'job_types', 'job_opening_statuses', 'provinces'));
    }

    public function save(Request $request)
    {
        $this->validateCreate($request);

        $this->saveJob($request);

        return redirect()->route('employer.jobs');
    }

    public function show($id)
    {
        $job = Job::with('type')
                    ->where('id', $id)
                    ->where('employer_id', employer()->id)
                    ->firstOrFail();

        return view('employer.job-show', compact('job'));
    }

    public function delete($id)
    {
        employer()->jobs()->whereId($id)->delete();

        return redirect()->back();
    }

    public function publish($id)
    {
        $job = Job::with(['type', 'province'])
                    ->where('id', $id)
                    ->where('employer_id', employer()->id)
                    ->firstOrFail();

        $job->published_date = Carbon::now();
        $job->save();

        return redirect()->back();
    }

    private function validateCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'industry' => 'required',
            'job-opening-status' => 'required',
            'job-type' => 'required',
            'number-of-position' => 'required',
            'closing-date' => 'required|date|after:today',
        ], [
            'required' => 'Field required.'
        ]);
    }

    private function saveJob(Request $request)
    {
        return employer()->jobs()->create([
            'employer_id' => employer()->id,
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'published_date' => $request->get('publish') ? Carbon::now() : null,
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
    }
}
