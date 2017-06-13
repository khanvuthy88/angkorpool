@extends('layout.master')

@section('content')
<div class="container">
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
                                    <td>{{ $job->province }}</td>
                                    <td>{{ $job->closing_date }}</td>
                                    <td><a href="#" class="text-secondary text-shadow" title="Apply"><i class="fa fa-paper-plane"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="applied-jobs" role="tabpanel">...2</div>
            </div>
        </div>
    </div>
</div>
@stop
