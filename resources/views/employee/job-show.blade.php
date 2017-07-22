@extends('layout.master')

@section('content')
<form action="{{ route('employee.apply.job', [ 'job' => $job->id ]) }}" method="POST">
    {{ csrf_field() }}
    <div class="card hidden-sm-down border-radius-0">
        <div class="card-block">
            <h4 class="card-title">{{ $job->title }}</h4>
            <h6 class="card-subtitle mb-2 text-muted font-italic">Posted on {{ $job->published_date->format('Y-m-d') }}</h6>
        </div>
        <div class="card-block clearfix">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="font-weight-600 width-min-200">Job Type</td>
                        <td><p class="card-text">{{ $job->job_type }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-600 width-min-200">No. Of Positions</td>
                        <td><p class="card-text">{{ $job->number_of_positions }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-600 width-min-200">Location</td>
                        <td><p class="card-text">{{ $job->location }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-600 width-min-200">Industry</td>
                        <td><p class="card-text">{{ $job->industry_name }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-600 width-min-200">Experience</td>
                        <td><p class="card-text">{{ $job->work_experience }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-600 width-min-200">Job Description</td>
                        <td><p class="card-text">{{ $job->description }}</p></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-secondary text-uppercase pull-right pt-3 pb-3 pl-5 pr-5">Apply Now</button>
        </div>
    </div>
    <div class="card hidden-md-up border-radius-0">
        <div class="card-block">
            <h4 class="card-title">{{ $job->title }}</h4>
            <h6 class="card-subtitle mb-2 text-muted font-italic">Posted on {{ $job->published_date->format('Y-m-d') }}</h6>

            <dl class="mt-4">
                <dt class="font-weight-600">Job Type</dt><hr class="mt-1 mb-1">
                <dd><p class="card-text">{{ $job->job_type }}</p></dd>
            </dl>
            <dl class="mt-4">
                <dt class="font-weight-600">No. Of Positions</dt><hr class="mt-1 mb-1">
                <dd><p class="card-text">{{ $job->number_of_positions }}</p></dd>
            </dl>
            <dl class="mt-4">
                <dt class="font-weight-600">Location</dt><hr class="mt-1 mb-1">
                <dd><p class="card-text">{{ $job->location }}</p></dd>
            </dl>
            <dl class="mt-4">
                <dt class="font-weight-600">Industry</dt><hr class="mt-1 mb-1">
                <dd><p class="card-text">{{ $job->industry_name }}</p></dd>
            </dl>
            <dl class="mt-4">
                <dt class="font-weight-600">Experience</dt><hr class="mt-1 mb-1">
                <dd><p class="card-text">{{ $job->work_experience }}</p></dd>
            </dl>
            <dl class="mt-4">
                <dt class="font-weight-600">Job Description</dt><hr class="mt-1 mb-1">
                <dd><p class="card-text">{{ $job->description }}</p></dd>
            </dl>
        </div>
        <div class="card-block">
            <button class="btn btn-secondary text-uppercase full-width pt-3 pb-3 pl-5 pr-5">Apply Now</button>
        </div>
    </div>
</form>
@stop
