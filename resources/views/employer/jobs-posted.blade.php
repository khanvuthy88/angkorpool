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
            <div class="columns button-action-area">
                <div class="column text-muted fs-14">
                    <span class="badge badge-default"><i class="fa fa-calendar-times-o"></i> {{ $job->closing_date->format('Y-m-d') }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center align-items-center p-3">
    {{ $jobs->links() }}
</div>
@stop
