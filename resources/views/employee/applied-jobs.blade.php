@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-block">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Job Type</th>
                    <th>Closing Date</th>
                    <th>Applied Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td><a href="{{ route('job.show', ['id' => $job->id]) }}">{{ $job->title }}</a></td>
                    <td>{{ $job->job_type }}</td>
                    <td>{{ $job->closing_date->format('Y-m-d') }}</td>
                    <td>{{ \Carbon\Carbon::parse($job->pivot->applied_date)->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
