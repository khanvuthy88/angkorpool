@extends('employer.layouts.admin')

@section('content')
<div class="card">
    <div class="card-block">
        <div class="d-flex justify-content-start align-items-center pt-3 pb-3">
            <a href="{{ route('employer.job.post') }}" class="btn btn-secondary">Create Job</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Industry</th>
                    <th>Job Type</th>
                    <th>Location</th>
                    <th>Closing Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td><a href="{{ route('employer.job.show', [ 'id' => $job->id ]) }}">{{ $job->title }}</a></td>
                    <td>{{ $job->status_name }}</td>
                    <td>{{ $job->industry_name }}</td>
                    <td>{{ $job->job_type_name }}</td>
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->closing_date->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('employer.job.delete', [ 'id' => $job->id ]) }}"
                            class="btn btn-sm btn-danger w30xh30 d-inline-flex justify-content-center align-items-center"
                            title="Delete">
                            <span class="fa fa-trash-o"></span>
                        </a>
                        @if(! $job->published)
                        <a href="{{ route('employer.job.publish', [ 'id' => $job->id ]) }}"
                            class="btn btn-sm btn-secondary w30xh30 d-inline-flex justify-content-center align-items-center"
                            title="Publish">
                            <span class="fa fa-bolt"></span>
                        </a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="d-flex justify-content-center align-items-center p-3">
    {{ $jobs->links() }}
</div>
@stop
