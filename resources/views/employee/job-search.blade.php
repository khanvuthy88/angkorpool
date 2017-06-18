@extends('layout.master')

@section('content')
<div id="job-search" class="row">
    <div class="col-md-3 pr-md-0">
        <div class="card mb-3">
            <span class="card-header"><i class="fa fa-industry mr-2"></i>Industry</span>
            <ul class="list-group list-group-flush">
                @foreach($industries as $industry)
                    <li class="list-group-item no-border pt-1 pb-1">
                        <input type="checkbox" class="mr-2" name="remember">{{ $industry->name }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card mb-3">
            <span class="card-header"><i class="fa fa-clock-o mr-2"></i>Job Type</span>
            <ul class="list-group list-group-flush">
                @foreach($job_types as $job_type)
                    <li class="list-group-item no-border pt-1 pb-1">
                        <input type="checkbox" class="mr-2" name="remember">{{ $job_type->caption }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-9">
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
        <div class="box is-paddingless">
            @foreach($jobs as $job)
                <div class="inner-wrapper border-bottom is-clearfix">
                    <h2 class="fs-17-fw-800">{{ $job->title }}</h2>
                    <p class="text-muted-50">{{ Str::limit($job->description, 300) }}</p>
                    <div class="columns button-action-area">
                        <div class="column text-muted fs-14">
                            Closing date: 2017-10-10
                        </div>
                        <div class="column flex-grow-0">
                            <a href="#" class="button is-primary">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop
