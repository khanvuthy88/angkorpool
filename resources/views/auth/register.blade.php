@extends('layout.master')

@section('content')
<section class="section">
    <div class="container d-flex justify-content-center">
        <div class="col-md-12 col-lg-7">
        	<div class="card">
        		<h5 class="card-header"><i class="fa fa-user mr-2"></i>Register</h5>
        		<div class="card-block">
        			<form action="/user/register" method="POST">
        				{{ csrf_field() }}
                        <div class="form-group row {{ ! $errors->has('surname') ?: 'has-danger' }}">
                            <label for="surname" class="col-sm-12 col-md-3 col-form-label">Surname</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" id="surname" name="surname" value="{{ old('surname') }}">
                                @if ($errors->has('surname'))
                                    <div class="form-control-feedback">{{ $errors->first('surname') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ ! $errors->has('name') ?: 'has-danger' }}">
                            <label for="name" class="col-sm-12 col-md-3 col-form-label">Name</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ ! $errors->has('email') ?: 'has-danger' }}">
                            <label for="email" class="col-sm-12 col-md-3 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ ! $errors->has('password') ?: 'has-danger' }}">
                            <label for="password" class="col-sm-12 col-md-3 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="password" id="password" name="password" value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ ! $errors->has('password_confirmation') ?: 'has-danger' }}">
                            <label for="password_confirmation" class="col-sm-12 col-md-3 col-form-label">Password Again</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                @if ($errors->has('password_confirmation'))
                                    <div class="form-control-feedback">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-12 col-md-9 offset-md-3 d-flex flex-column flex-md-row">
                                <button class="btn btn-secondary">Register</button>
                            </div>
                        </div>
        			</form>
        		</div>
        	</div>
        </div>
    </div>
</section>
@stop
