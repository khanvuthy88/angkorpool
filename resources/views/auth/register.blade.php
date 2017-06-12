@extends('layout.master')

@section('content')
<section class="section">
    <div class="container">
    	<div class="card">
    		<div class="card-header">Register</div>
    		<div class="card-block">
    			<form action="/user/register" method="POST">
    				{{ csrf_field() }}
                    <div class="form-group row {{ ! $errors->has('surname') ?: 'has-danger' }}">
                        <label for="surname" class="col-2 col-form-label">Surname</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="surname" name="surname" value="{{ old('surname') }}">
                            @if ($errors->has('surname'))
                                <div class="form-control-feedback">{{ $errors->first('surname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row {{ ! $errors->has('name') ?: 'has-danger' }}">
                        <label for="name" class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
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
                    <div class="form-group row {{ ! $errors->has('password_confirmation') ?: 'has-danger' }}">
                        <label for="password_confirmation" class="col-2 col-form-label">Password Again</label>
                        <div class="col-10">
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                            @if ($errors->has('password_confirmation'))
                                <div class="form-control-feedback">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-2">
                            <button class="btn btn-secondary">Register</button>
                        </div>
                    </div>
    			</form>
    		</div>
    	</div>
    </div>
</section>
@stop
