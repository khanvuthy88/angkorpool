@extends('layout.master')

@section('content')
<form class="form-horizontal" action="/user/register" method="POST">
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
</form>
@stop