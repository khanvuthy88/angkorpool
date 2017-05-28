@extends('layout.master')

@section('content')
<section class="section">
    <div class="container">
    	<div class="panel">
    		<p class="panel-heading">Register</p>
    		<div class="panel-block">
    			<form class="is-fullwidth" action="/user/register" method="POST">
    				{{ csrf_field() }}
    				<div class="field is-horizontal">
    					<div class="field-label is-normal">
							<label class="label">Surname</label>
						</div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<input class="input" type="text" name="surname" value="{{ old('surname') }}">
    							</div>
    							@if ($errors->has('surname'))
	    							<p class="help is-danger">
		    							{{ $errors->first('surname') }}
		      						</p>
		      					@endif
    						</div>    						
	    				</div>
    				</div>
    				<div class="field is-horizontal">
    					<div class="field-label is-normal">
							<label class="label">Name</label>
						</div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<input class="input" type="text" name="name" value="{{ old('name') }}">
    							</div>
    							@if ($errors->has('name'))
	    							<p class="help is-danger">
		    							{{ $errors->first('name') }}
		      						</p>
		      					@endif
    						</div>    						
	    				</div>
    				</div>
    				<div class="field is-horizontal">
    					<div class="field-label is-normal">
							<label class="label">Email</label>
						</div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<input class="input" type="text" name="email" value="{{ old('email') }}">
    							</div>
    							@if ($errors->has('email'))
	    							<p class="help is-danger">
		    							{{ $errors->first('email') }}
		      						</p>
		      					@endif
    						</div>    						
	    				</div>
    				</div>
    				<div class="field is-horizontal">
    					<div class="field-label is-normal">
							<label class="label">Password</label>
						</div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<input class="input" type="password" name="password">
    							</div>
    							@if ($errors->has('password'))
	    							<p class="help is-danger">
		    							{{ $errors->first('password') }}
		      						</p>
		      					@endif
    						</div>    						
	    				</div>
    				</div>
    				<div class="field is-horizontal">
    					<div class="field-label is-normal">
							<label class="label">Confirm Password</label>
						</div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<input class="input" type="password" name="password_confirmation">
    							</div>
    							@if ($errors->has('password_confirmation'))
	    							<p class="help is-danger">
		    							{{ $errors->first('password_confirmation') }}
		      						</p>
		      					@endif
    						</div>    						
	    				</div>
    				</div> 
    				<div class="field is-horizontal">
    					<div class="field-label is-normal"></div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<button class="button is-primary">Register</button>
    							</div>
    						</div>    						
	    				</div>
    				</div>  				
    			</form>
    		</div>
    	</div>
    </div>
</section>
@stop