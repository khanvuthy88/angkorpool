@extends('layout.master')

@section('content')
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
@stop
