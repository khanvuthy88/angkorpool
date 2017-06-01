@extends('layout.master')

@section('content')
<section class="section is-paddingless" id="kill-page-image">
	<div class="container is-full-width-height">
		<div class="call-to-action">
			<h1 class="subject">
				Find you dream job
			</h1>	
			<div class="call-to-action-input">
				<input type="text" placeholder="What are you looking?"/>
				<button class="is-primary"><i class="fa fa-search"></i></button>
			</div>		
		</div>
	</div>
</section>
<div class="container">
	<section class="section">
		<div class="box is-paddingless no-border">
			@foreach($jobs as $job)
				<div class="inner-wrapper border-bottom is-clearfix">		
					<a href="#"><h2 class="fs-17-fw-800">{{ $job->title }}</h2></a>
					<p class="text-muted-50">{{ Str::limit($job->description, 300) }}</p>
					<div class="columns button-action-area">
						<div class="column text-muted fs-14">
							Closing date: 2017-10-10
						</div>
					</div>				
				</div>
			@endforeach
		</div>
	</section>
</div>
@stop