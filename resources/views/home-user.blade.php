@extends('layout.master')

@section('content')
<div class="container top-most-margin">
    <div class="tabs is-boxed">
        <ul>
            <li class="is-active"><a>Latest Jobs</a></li>
            <li><a>Applied Jobs</a></li>
        </ul>
    </div>
</div>

<div class="container bg-white border-left border-right border-bottom">
    <section class="section">
        <table class="table">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Location</td>
                    <td>Closing Date</td>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td><a href="{{ url('job/1')}}">{{ $job->title }}</a></td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->closing_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@stop
