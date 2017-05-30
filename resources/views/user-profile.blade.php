@extends('layout.master')

@section('content')
<section class="section profile">
	<div class="container">
		<div class="box is-flex-important">
			<div class="photo"><img src="{{ url('storage/images/64x64.png') }}"></div>
			<div class="summary">
				<h1 class="name">{{ $user->fullname }}</h1>
				<span class="gender is-block {{ !is_null($user->gender) ?: 'hide' }}">
					<i class="fa {{ $user->gender == 'F' ? 'fa-female' : 'fa-male' }} icon"></i>
					{{ $user->gender_full }}
				</span>
				<span class="dob is-block {{ !is_null($user->dob) ?: 'hide' }}"><i class="fa fa-calendar icon"></i>{{ $user->dob }}</span>
				<span class="phone-number is-block {{ !is_null($user->phone_number) ?: 'hide' }}"><i class="fa fa-phone icon"></i>{{ $user->phone_number }}</span>
				<span class="email is-block"><i class="fa fa-envelope icon"></i>{{ $user->email }}</span>
				<span class="address is-block {{ !is_null($user->address) ?: 'hide' }}"><i class="fa fa-user icon"></i>{{ $user->address }}</span>
			</div>
		</div>
	</div>
</section>
<section class="section experience">
    <div class="container">
    	<div class="box">
    		<header>
    			<h2 class="title">Experience</h2>
    			<a href="" class="action is-flex"><span class="fa fa-plus"></span></a>
    		</header> 
    		<ul>
    			@foreach($user->experiences as $experience)
	    			<li class="">
	    				{{-- <div class="el-action"><span class="fa fa-pencil"></span></div> --}}
	    				<div class="el-logo"><img src="{{ url('storage/images/64x64.png') }}"></div>
	    				<div class="el-summary">
	    					<h2 class="title">{{ $experience->title }}</h2>
	    					<h3 class="company">{{ $experience->company_name }}</h3>
	    					<h4 class="period">{{ $experience->from_date_m_y }} - {{ $experience->to_date_m_y }}</h4>
	    					<h4 class="location">{{ $experience->location }}</h4>
	    				</div>
	    				<div class="el-detail">{{ $experience->extra_detail }}</div>
	    			</li>
	    		@endforeach
    		</ul>   		
    	</div>
    </div>
</section>
<section class="section education">
    <div class="container">
    	<div class="box">
    		<header>
    			<h2 class="title">Education</h2>
    			<a href="" class="action is-flex"><span class="fa fa-plus"></span></a>
    		</header> 
    		<ul>
    			@foreach($user->educations as $education)
	    			<li class="">
	    				{{-- <div class="el-action"><span class="fa fa-pencil"></span></div> --}}
	    				<div class="el-logo"><img src="{{ url('storage/images/64x64.png') }}"></div>
	    				<div class="el-summary">
	    					<h2 class="title">{{ $education->title }}</h2>
	    					<h3 class="college">{{ $education->college }}</h3>
	    					<h4 class="period">{{ $education->from_date_m_y }} - {{ $education->to_date_m_y }}</h4>
	    				</div>
	    				<div class="el-detail">{{ $education->extra_detail }}</div>
	    			</li>
	    		@endforeach
    		</ul>   		
    	</div>
    </div>
</section>
@stop