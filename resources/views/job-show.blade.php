@extends('layout.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">{{ $job->title }}</h4>
            <h6 class="card-subtitle mb-2 text-muted font-italic">Posted on {{ \Carbon\Carbon::parse($job->published_date)->format('Y-m-d') }}</h6>
        </div>
        <div class="card-block clearfix">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="font-weight-bold">Job Type</td>
                        <td><p class="card-text">{{ $job->job_type }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">No. Of Positions</td>
                        <td><p class="card-text">{{ $job->number_of_positions }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Location</td>
                        <td><p class="card-text">{{ $job->province }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Industry</td>
                        <td><p class="card-text">{{ $job->industry }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Experience</td>
                        <td><p class="card-text">{{ $job->work_experience }}</p></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Job Description</td>
                        <td><p class="card-text">{{ $job->description }}</p></td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-secondary text-uppercase pull-right">Apply</a>
        </div>
    </div>
</div>
@stop
