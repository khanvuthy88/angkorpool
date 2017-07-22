@extends('layout.master')

@section('content')
<section id="employee-search-job-dash" class="d-flex flex-column justify-content-center align-items-center mb-3">
    <h1 class="subject">
        Find you dream job
    </h1>
    <div class="action-input">
        <form action="{{ route('job.search')}}" method="GET">
            {{ csrf_field() }}
            <div class="input-group">
              <input type="text" class="form-control" name="title" placeholder="What job are you looking?">
              <span class="input-group-btn">
                <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
    </div>
</section>
<section>
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#latest-jobs" role="tab">Latest Jobs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#applied-jobs" role="tab">Applied Jobs</a>
        </li>
    </ul>
    <div class="card border-top-0 border-radius-0">
        <div class="card-block">
            <div class="tab-content">
                <div class="tab-pane active" id="latest-jobs" role="tabpanel">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Closing Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <td><a href="{{ route('job.show', ['id' => $job->id]) }}">{{ $job->title }}</a></td>
                                    <td>{{ $job->location }}</td>
                                    <td>{{ $job->closing_date }}</td>
                                    <td>
                                        <a href="#" class="text-secondary text-shadow mr-2" title="Click to apply"><i class="fa fa-paper-plane"></i></a>
                                        <a href="#" class="text-favorite text-shadow" title="Save favorite"><i class="fa fa-star"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="applied-jobs" role="tabpanel">...2</div>
            </div>
        </div>
    </div>
</section>
@stop
