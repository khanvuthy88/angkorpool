@extends('layout.master')

@section('content')
<div class="container top-most-margin">
	<div class="box is-paddingless">
		@foreach($jobs as $job)
			<div class="inner-wrapper">		
				<h2 class="fs-17-fw-800">{{ $job->title }}</h2>
				<p class="text-muted">{{ \Illuminate\Support\Str::limit($job->description, 300) }}</p>
				<a href="#" class="button is-primary">Publish</a>
			</div>
		@endforeach
	</div>
</div>
@stop