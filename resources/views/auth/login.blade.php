@extends('layout.master')

@section('content')
<section class="section">
    <div class="container">
    	<div class="card">
    		<div class="card-header">Login</div>
    		<div class="card-block">
    			<form action="/user/login" method="POST">
    			@if($errors->has('credential'))
    				<p class="help has-text-centered is-danger">
						{{ $errors->first('credential') }}
					</p>
    			@endif
	    			{{ csrf_field() }}
                    <div class="form-group row {{ ! $errors->has('email') ?: 'has-danger' }}">
                      <label for="email" class="col-2 col-form-label">Email</label>
                      <div class="col-10">
                        <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row {{ ! $errors->has('password') ?: 'has-danger' }}">
                      <label for="password" class="col-2 col-form-label">Password</label>
                      <div class="col-10">
                        <input class="form-control" type="password" id="password" name="password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="remember">
                                  Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-2">
                            <button class="btn btn-secondary">Login</button>
                        </div>
                    </div>
    			</form>
			</div>
		</div>
    </div>
</section>
@stop
