@extends('layout.master')

@section('content')
<div id="job-search" class="d-flex flex-row">
    <div class="filter pr-md-3">
        <div id="accordion-industry" role="tablist" class="mb-3">
            <div class="card no-border">
                <span class="card-header">
                    <a data-toggle="collapse" data-parent="#accordion-industry" href="#collapse-industry">
                        <span class="flex-1"><i class="fa fa-industry mr-2"></i>Industry</span>
                        <span class="btn-collapse fa fa-chevron-down"></span>
                    </a>
                </span>
                <div id="collapse-industry" class="collapse show" role="tabpanel">
                    <ul class="list-group">
                        @foreach($industries as $industry)
                            <li class="list-group-item no-border pt-1 pb-1">
                                <input type="checkbox" class="mr-2" name="remember">{{ $industry->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div id="accordion-job-type" role="tablist" class="mb-3">
            <div class="card">
                <span class="card-header">
                    <a data-toggle="collapse" data-parent="#accordion-job-type" href="#collapse-job-type">
                        <span class="flex-1"><i class="fa fa-clock-o mr-2"></i>Job Type</span>
                        <span class="btn-collapse fa fa-chevron-down"></span>
                    </a>
                </span>
                <div id="collapse-job-type" class="collapse show" role="tabpanel">
                    <ul class="list-group">
                        @foreach($job_types as $job_type)
                            <li class="list-group-item no-border pt-1 pb-1">
                                <input type="checkbox" class="mr-2" name="remember">{{ $job_type->caption }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="result">
        <section class="d-flex flex-column justify-content-center align-items-center mb-3">
            <div class="action-input full-width">
                <form action="{{ route('employee.job.search')}}" method="GET">
                    {{ csrf_field() }}
                    <div class="input-group">
                      <input type="text" class="form-control" name="job-title" placeholder="What job are you looking?">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary pl-5 pr-5"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                </form>
            </div>
        </section>
        <div class="box is-paddingless box-result">
            @foreach($jobs as $job)
                <div class="media inner-wrapper border-bottom is-clearfix">
                    <img class="d-flex mr-3" src="{{ url('storage/images/64x64.png') }}">
                    <div class="media-body">
                        <h2 class="title font-weight-600"><a href="{{ route('job.show', [ 'id' => $job->id ]) }}">{{ $job->title }}</a></h2>
                        <p class="description">{{ Str::limit($job->description, 300) }}</p>
                        <div class="d-flex mt-4">
                            <span class="badge text-muted fs-14 font-weight-600 mr-1" title="Industry"><i class="fa fa-industry mr-1"></i>{{ $job->industry_name }}</span>
                            <span class="badge text-muted fs-14 font-weight-600 mr-1" title="Job Type"><i class="fa fa-bolt mr-1"></i>{{ $job->job_type }}</span>
                            <span class="badge text-muted fs-14 font-weight-600 mr-1" title="Closing Date"><i class="fa fa-calendar-times-o mr-1"></i>{{ $job->closing_date->format('Y-m-d') }}</span>
                            <span class="badge text-muted fs-14 font-weight-600" title="Closing Date"><i class="fa fa-map-marker mr-1"></i>{{ $job->location }}</span>
                        </div>
                    </div>
                    <a class="btn-apply btn-secondary fs-14 p-2" href="#">Quick Apply<i class="fa fa-arrow-right ml-2"></i></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop
