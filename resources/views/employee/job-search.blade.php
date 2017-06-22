@extends('layout.master')

@section('content')
<form action="{{ route('employee.job.search')}}" method="POST" class="hidden-md-down">
    {{ csrf_field() }}
    <div id="job-search" class="d-flex flex-column flex-lg-row">
        <div class="filter pr-md-3 hidden-lg-down">
            <div id="accordion-industry" role="tablist" class="accordion mb-4">
                <div class="card no-border">
                    <span class="card-header">
                        <a data-toggle="collapse" data-parent="#accordion-industry" href="#collapse-industry">
                            <span class="flex-1"><i class="fa fa-industry mr-2"></i>Industry</span>
                            <span class="icon-collapse fa fa-chevron-up"></span>
                        </a>
                    </span>
                    <div id="collapse-industry" class="collapse show" role="tabpanel">
                        <ul class="list-group">
                            @foreach($industries as $industry)
                                <li class="list-group-item no-border pt-1 pb-1">
                                    <input type="checkbox" class="mr-2" name="industries[]" value="{{ $industry->id }}">{{ $industry->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div id="accordion-job-type" role="tablist" class="accordion mb-4">
                <div class="card">
                    <span class="card-header">
                        <a data-toggle="collapse" data-parent="#accordion-job-type" href="#collapse-job-type">
                            <span class="flex-1"><i class="fa fa-clock-o mr-2"></i>Job Type</span>
                            <span class="icon-collapse fa fa-chevron-up"></span>
                        </a>
                    </span>
                    <div id="collapse-job-type" class="collapse show" role="tabpanel">
                        <ul class="list-group">
                            @foreach($job_types as $job_type)
                                <li class="list-group-item no-border pt-1 pb-1">
                                    <input type="checkbox" class="mr-2" name="job_types[]" value="{{ $job_type->id }}">{{ $job_type->caption }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div id="accordion-job-location" role="tablist" class="accordion mb-4">
                <div class="card">
                    <span class="card-header">
                        <a data-toggle="collapse" data-parent="#accordion-job-location" href="#collapse-job-location">
                            <span class="flex-1"><i class="fa fa-map-marker mr-2"></i>Location</span>
                            <span class="icon-collapse fa fa-chevron-up"></span>
                        </a>
                    </span>
                    <div id="collapse-job-location" class="collapse show" role="tabpanel">
                        <div class="form-group">
                            <select class="form-control form-control-sm" name="location">
                                <option value="">--Select--</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->code }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="result">
            <section class="d-flex flex-column justify-content-center align-items-center mb-3">
                <div class="action-input full-width clearfix">
                    <div class="input-group">
                        <input type="text" class="form-control" name="job-title" placeholder="What job are you looking?">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary pl-5 pr-5"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
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
                                <span class="badge text-muted fs-14 font-weight-600 mr-1" title="Job Type"><i class="fa fa-clock-o mr-1"></i>{{ $job->job_type }}</span>
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
</form>

<form action="{{ route('employee.job.search')}}" method="POST" class="hidden-lg-up">
    {{ csrf_field() }}
    <div id="job-search" class="d-flex flex-column flex-lg-row">
        <section class="d-flex flex-column justify-content-center align-items-center mb-3">
            <div class="action-input full-width clearfix">
                <div class="input-group">
                    <input type="text" class="form-control" name="job-title" placeholder="What job are you looking?">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary pl-5 pr-5"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <a data-toggle="collapse" data-parent="#accordion-0" href="#collapse-0" class="pull-right hidden-lg-up"><small>Advanced Filters &gt;&gt;</small></a>
            </div>
            <div id="accordion-0" role="tablist" class="full-width mt-3">
                <div id="collapse-0" class="collapse" role="tabpanel">
                    <div class="form-group">
                        <select class="form-control" name="industries">
                            <option value="">--Industry--</option>
                            @foreach($industries as $industry)
                                <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="job_types">
                            <option value="">--Job Type--</option>
                            @foreach($job_types as $job_type)
                                <option value="{{ $job_type->id }}">{{ $job_type->caption }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="location">
                            <option value="">--Location--</option>
                            @foreach($provinces as $province)
                                <option value="{{ $province->code }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <div class="result">
            <div class="box is-paddingless box-result">
                @foreach($jobs as $job)
                    <div class="media inner-wrapper border-bottom is-clearfix">
                        <img class="d-flex mr-3" src="{{ url('storage/images/64x64.png') }}">
                        <div class="media-body">
                            <h2 class="title font-weight-600"><a href="{{ route('job.show', [ 'id' => $job->id ]) }}">{{ $job->title }}</a></h2>
                            <p class="description">{{ Str::limit($job->description, 300) }}</p>
                            <div class="d-flex mt-4">
                                <span class="badge text-muted fs-14 font-weight-600 mr-1" title="Industry"><i class="fa fa-industry mr-1"></i>{{ $job->industry_name }}</span>
                                <span class="badge text-muted fs-14 font-weight-600 mr-1" title="Job Type"><i class="fa fa-clock-o mr-1"></i>{{ $job->job_type }}</span>
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
</form>
@stop


@section('script')
<script type="text/javascript">
    $('#job-search .accordion a').on('click', function(){
        var icon_collapse = $(this).find('.icon-collapse');
        if($(this).hasClass('collapsed')){
            $(icon_collapse).removeClass('fa-chevron-down');
            $(icon_collapse).addClass('fa-chevron-up');
        }else{
            $(icon_collapse).removeClass('fa-chevron-up');
            $(icon_collapse).addClass('fa-chevron-down');
        }
    });
</script>
@stop
