@extends('layout.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">{{ $job->title }}</h4>
            <h6 class="card-subtitle mb-2 text-muted">Posted on {{ \Carbon\Carbon::parse($job->published_date)->format('Y-m-d') }}</h6>
        </div>
        <div class="card-block clearfix">
            <p class="card-text">{{ $job->description }}</p>
            <a href="#" class="btn btn-secondary text-uppercase pull-right">Apply</a>
        </div>
    </div>
</div>
@stop
