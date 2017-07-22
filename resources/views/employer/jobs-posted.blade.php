@extends('layout.master')

@section('content')
<div class="mb-2 full-width text-right">
    <a href="{{ route('employer.job.post') }}" class="btn btn-secondary">Create Job</a>
</div>
<div class="box">
    @foreach($jobs as $job)
        <div class="inner-wrapper border-bottom is-clearfix">
            <h2 class="fs-17 font-weight-600"><a href="{{ route('employer.job.show', [ 'id' => $job->id ]) }}">{{ $job->title }}</a></h2>
            <p class="text-muted-50">{{ Str::limit($job->description, 300) }}</p>
            <div class="d-flex mt-2">
                <span class="badge text-muted fs-14 mr-1" title="Industry"><i class="fa fa-industry mr-1"></i>{{ $job->industry_name }}</span>
                <span class="badge text-muted fs-14 mr-1" title="Job Type"><i class="fa fa-bolt mr-1"></i>{{ $job->job_type }}</span>
                <span class="badge text-muted fs-14" title="Closing Date"><i class="fa fa-calendar-times-o mr-1"></i>{{ $job->closing_date->format('Y-m-d') }}</span>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center align-items-center p-3">
    {{ $jobs->links() }}
</div>
@stop
