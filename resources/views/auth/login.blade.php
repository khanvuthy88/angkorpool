@extends('layout.master')

@section('content')
<section class="section">
    <div class="container">
    	<div class="panel">
    		<p class="panel-heading">Login</p>
    		<div class="panel-block">
    			<form class="is-fullwidth" action="/user/login" method="POST">
    			@if($errors->has('credential'))
	    			
	    				<p class="help has-text-centered is-danger">
							{{ $errors->first('credential') }}
						</p>
    			@endif
	    			{{ csrf_field() }}
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
    					<div class="field-label is-normal"></div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<label class="checkbox">
							        	<input type="checkbox" name="remember">
							        	Remember Me
							        </label>
    							</div>
    						</div>    						
	    				</div>
    				</div>
    				<div class="field is-horizontal">
    					<div class="field-label is-normal"></div>
    					<div class="field-body">
    						<div class="field">
    							<div class="control">
    								<button class="button is-primary">Login</button>
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