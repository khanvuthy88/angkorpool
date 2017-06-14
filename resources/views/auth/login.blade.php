@extends('layout.master')

@section('content')
<section class="section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-7">
                <div class="card">
                    <h5 class="card-header"><i class="fa fa-key mr-2"></i>Login</h5>
                    <div class="card-block">
                        @if($errors->has('credential'))
                            <div class="alert alert-danger" id="alert">{{ $errors->first('credential') }}</div>
                        @endif
                        <form action="/user/login" method="POST">
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
                                <input class="form-control" type="password" id="password" name="password">
                                @if ($errors->has('password'))
                                    <div class="form-control-feedback"><small>{{ $errors->first('password') }}</small></div>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row {{ ! $errors->has('login_as') ?: 'has-danger' }}">
                                <div class="col-sm-12 col-md-9 offset-md-3">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                type="radio" name="login_as"
                                                value="employees"
                                                {{ old('login_as') == 'employees' || is_null(old('login_as')) ? 'checked' : '' }}> Job seeker
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input"
                                                type="radio" name="login_as"
                                                value="employers"
                                                {{ old('login_as') == 'employers' ? 'checked' : '' }}> Employers
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-9 offset-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" name="remember">
                                          Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-12 col-md-9 offset-md-3 d-flex flex-column flex-md-row">
                                    <button class="btn btn-secondary">Login</button>
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
