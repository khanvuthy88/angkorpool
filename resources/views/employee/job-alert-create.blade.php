@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-block">
        <form action="{{ route('job.alert.create')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row {{ ! $errors->has('keyword') ?: 'has-danger' }}">
                <label for="keyword" class="col-sm-12 col-md-3 col-form-label">Keyword</label>
                <div class="col-sm-12 col-md-9">
                    <input class="form-control" type="text" id="keyword" name="keyword" value="{{ old('keyword') }}">
                    @if ($errors->has('keyword'))
                        <div class="form-control-feedback"><small>{{ $errors->first('keyword') }}</small></div>
                    @endif
                </div>
            </div>
            <div class="form-group row {{ ! $errors->has('industry') ?: 'has-danger' }}">
                <label for="industry" class="col-sm-12 col-md-3 col-form-label">Industry</label>
                <div class="col-sm-12 col-md-9">
                    <select class="form-control" name="industry" id="industry">
                        <option value="">--Select--</option>
                        @foreach($industries as $industry)
                            <option value="{{ $industry->id }}">
                                {{ $industry->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row {{ ! $errors->has('job_type') ?: 'has-danger' }}">
                <label for="job_type" class="col-sm-12 col-md-3 col-form-label">Job type</label>
                <div class="col-sm-12 col-md-9">
                    <select class="form-control" name="job_type" id="job_type">
                        <option value="">--Select--</option>
                        @foreach($job_types as $job_type)
                            <option value="{{ $job_type->id }}">
                                {{ $job_type->caption }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row {{ ! $errors->has('province') ?: 'has-danger' }}">
                <label for="province" class="col-sm-12 col-md-3 col-form-label">Location</label>
                <div class="col-sm-12 col-md-9">
                    <select class="form-control" name="province" id="province">
                        <option value="">--Select--</option>
                        @foreach($provinces as $province)
                            <option value="{{ $province->code }}">
                                {{ $province->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row {{ ! $errors->has('frequency') ?: 'has-danger' }}">
                <label for="frequency" class="col-sm-12 col-md-3 col-form-label">Send mail (every)</label>
                <div class="form-check form-check-inline col-sm-12 col-md-9">
                    <label class="form-check-label mr-3">
                        <input class="form-check-input" type="radio" id="frequency" name="frequency" value="1" checked> Daily
                    </label>
                    <label class="form-check-label mr-3">
                        <input class="form-check-input" type="radio" id="frequency" name="frequency" value="2"> Weekly
                    </label>
                    <label class="form-check-label mr-3">
                        <input class="form-check-input" type="radio" id="frequency" name="frequency" value="3"> Monthly
                    </label>
                </div>
            </div>
            <button class="btn btn-secondary text-uppercase pull-right">Create Job Alert</button>
        </form>
    </div>
</div>
@stop
