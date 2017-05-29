@extends('layout.master')

@section('content')
<section class="section experience">
    <div class="container">
    	<div class="box">
    		<header>
    			<h2 class="title">Experience</h2>
    			<a href="" class="action is-flex"><span class="fa fa-plus"></span></a>
    		</header> 
    		<ul>
    			@foreach($experiences as $experience)
	    			<li class="">
	    				{{-- <div class="el-action"><span class="fa fa-pencil"></span></div> --}}
	    				<div class="el-logo"><img src="{{ url('storage/images/64x64.png') }}"></div>
	    				<div class="el-summary">
	    					<h2 class="title">{{ $experience->title }}</h2>
	    					<h3 class="company">{{ $experience->company_name }}</h3>
	    					<h4 class="period">Sept 2016 - Present</h4>
	    					<h4 class="location">{{ $experience->location }}</h4>
	    				</div>
	    				<div class="el-detail">{{ $experience->extra_detail }}</div>
	    			</li>
	    		@endforeach
    		</ul>   		
    	</div>
    </div>
</section>
@stop