@extends('layout.master')

@section('content')
{{-- <form class="form-horizontal" action="/user/register" method="POST">
	{{ csrf_field() }}
	<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    	<label for="email" class="col-sm-2 control-label">Email</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="email" name="email">
      		@if ($errors->has('email'))
	            <span class="help-block">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	        @endif
    	</div>    	
	</div>
	<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
    	<label for="password" class="col-sm-2 control-label">Password</label>
    	<div class="col-sm-10">
      		<input type="password" class="form-control" id="password" name="password">
      		@if ($errors->has('password'))
	            <span class="help-block">
	                <strong>{{ $errors->first('password') }}</strong>
	            </span>
	        @endif
    	</div>    	
	</div>
	<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    	<label for="password_confirmation" class="col-sm-2 control-label">Confirm Password</label>
    	<div class="col-sm-10">
      		<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
      		@if ($errors->has('password_confirmation'))
	            <span class="help-block">
	                <strong>{{ $errors->first('password_confirmation') }}</strong>
	            </span>
	        @endif
    	</div>    	
	</div>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
    		<button type="submit" class="btn btn-default">Create</button>
    	</div>
	</div>
</form> --}}

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