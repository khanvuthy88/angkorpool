@extends('layout.master')

@section('content')
<div class="container top-most-margin">
		<div class="columns no-margin-bottom">
			<div class="column">
				<div class="field is-grouped">
					<div class="control">
						<a href="#" class="button is-primary">All</a>
						<a href="#" class="button">Published</a>							
						<a href="#" class="button">Closed</a>	
					</div>						
				</div>
			</div>
			<div class="column">
			</div>
			<div class="column">				
				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<div class="control">
								<input class="input" type="search" name="search" placeholder="Search ...">
							</div>
						</div>  
						<div class="field flex-grow-0">
							<div class="control">
								<button class="button is-primary"><i class="fa fa-search"></i></button>
							</div>
						</div>   						
					</div>
				</div>
			</div>
		</div>
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
@stop