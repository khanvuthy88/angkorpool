@extends('layout.master')

@section('content')
<section class="section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-7">
                <div class="card">
                    <h5 class="card-header"><i class="fa fa-user mr-2"></i>Register</h5>
                    <div class="card-block">
            			<form action="/register" method="POST">
            				{{ csrf_field() }}
                            <div class="form-group row {{ ! $errors->has('email') ?: 'has-danger' }}">
                                <label for="email" class="col-sm-12 col-md-3 col-form-label">Email</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <div class="form-control-feedback"><small>{{ $errors->first('email') }}</small></div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row {{ ! $errors->has('password') ?: 'has-danger' }}">
                                <label for="password" class="col-sm-12 col-md-3 col-form-label">Password</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="password" id="password" name="password" value="{{ old('password') }}">
                                    @if ($errors->has('password'))
                                        <div class="form-control-feedback"><small>{{ $errors->first('password') }}</small></div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row {{ ! $errors->has('password_confirmation') ?: 'has-danger' }}">
                                <label for="password_confirmation" class="col-sm-12 col-md-3 col-form-label">Password Again</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                    @if ($errors->has('password_confirmation'))
                                        <div class="form-control-feedback"><small>{{ $errors->first('password_confirmation') }}</small></div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row {{ ! $errors->has('user_type') ?: 'has-danger' }}">
                                <label class="col-sm-12 col-md-3 col-form-label">I am</label>
                                <div class="col-sm-12 col-md-9">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="user_type" value="CAN"> Applicant looking for jobs
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="user_type" value="EMP"> an organization
                                        </label>
                                    </div>
                                    @if ($errors->has('user_type'))
                                        <div class="form-control-feedback"><small>{{ $errors->first('user_type') }}</small></div>
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
    </div>
</section>
@stop
