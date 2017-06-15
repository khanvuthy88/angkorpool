@extends('layout.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-block">
            <form action="{{ route('job.post') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row {{ ! $errors->has('title') ?: 'has-danger' }}">
                    <label for="title" class="col-sm-12 col-md-3 col-form-label">Job Title</label>
                    <div class="col-sm-12 col-md-9">
                        <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <div class="form-control-feedback"><small>{{ $errors->first('title') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('job-opening-status') ?: 'has-danger' }}">
                    <label for="job-opening-status" class="col-sm-12 col-md-3 col-form-label">Job Opening Status</label>
                    <div class="col-sm-12 col-md-9">
                        <select class="form-control" id="job-opening-status" name="job-opening-status">
                            <option value="1" {{ old('job-opening-status') == 1 ? 'selected' : '' }}>In-progress</option>
                            <option value="2" {{ old('job-opening-status') == 2 ? 'selected' : '' }}>Cancelled</option>
                            <option value="3" {{ old('job-opening-status') == 3 ? 'selected' : '' }}>Declined</option>
                            <option value="4" {{ old('job-opening-status') == 4 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @if ($errors->has('job-opening-status'))
                            <div class="form-control-feedback"><small>{{ $errors->first('job-opening-status') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('job-type') ?: 'has-danger' }}">
                    <label for="job-type" class="col-sm-12 col-md-3 col-form-label">Job Type</label>
                    <div class="col-sm-12 col-md-9">
                        <select class="form-control" id="job-type" name="job-type">
                            <option value="1" {{ old('job-type') == 1 ? 'selected' : '' }}>Full time</option>
                            <option value="2" {{ old('job-type') == 2 ? 'selected' : '' }}>Part time</option>
                            <option value="3" {{ old('job-type') == 3 ? 'selected' : '' }}>Contract</option>
                        </select>
                        @if ($errors->has('job-type'))
                            <div class="form-control-feedback"><small>{{ $errors->first('job-type') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('salary') ?: 'has-danger' }}">
                    <label for="salary" class="col-sm-12 col-md-3 col-form-label">Salary</label>
                    <div class="col-sm-12 col-md-9">
                        <input class="form-control" type="text" id="salary" name="salary" value="{{ old('salary') }}">
                        @if ($errors->has('salary'))
                            <div class="form-control-feedback"><small>{{ $errors->first('salary') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('industry') ?: 'has-danger' }}">
                    <label for="industry" class="col-sm-12 col-md-3 col-form-label">Industry</label>
                    <div class="col-sm-12 col-md-9">
                        <input class="form-control" type="text" id="industry" name="industry" value="{{ old('industry') }}">
                        @if ($errors->has('industry'))
                            <div class="form-control-feedback"><small>{{ $errors->first('industry') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('year-experience') ?: 'has-danger' }}">
                    <label for="year-experience" class="col-sm-12 col-md-3 col-form-label">Year Experience</label>
                    <div class="col-sm-12 col-md-9">
                        <input class="form-control" type="text" id="year-experience" name="year-experience" value="{{ old('year-experience') }}">
                        @if ($errors->has('year-experience'))
                            <div class="form-control-feedback"><small>{{ $errors->first('year-experience') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('number-of-position') ?: 'has-danger' }}">
                    <label for="number-of-position" class="col-sm-12 col-md-3 col-form-label">No. Of Positions</label>
                    <div class="col-sm-12 col-md-9">
                        <input class="form-control" type="text" id="number-of-position" name="number-of-position" value="{{ old('number-of-position') }}">
                        @if ($errors->has('number-of-position'))
                            <div class="form-control-feedback"><small>{{ $errors->first('number-of-position') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('location') ?: 'has-danger' }}">
                    <label for="location" class="col-sm-12 col-md-3 col-form-label">Location</label>
                    <div class="col-sm-12 col-md-9">
                        <select class="form-control" id="location" name="location">
                            <option value="1" {{ old('location') == 1 ? 'selected' : '' }}>Phnom Penh</option>
                            <option value="2" {{ old('location') == 2 ? 'selected' : '' }}>Kandal</option>
                            <option value="3" {{ old('location') == 3 ? 'selected' : '' }}>Kampong Chhnang</option>
                        </select>
                        @if ($errors->has('location'))
                            <div class="form-control-feedback"><small>{{ $errors->first('location') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('description') ?: 'has-danger' }}">
                    <label for="description" class="col-sm-12 col-md-3 col-form-label">Description</label>
                    <div class="col-sm-12 col-md-9">
                        <textarea class="form-control" type="text" id="description" name="description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <div class="form-control-feedback"><small>{{ $errors->first('description') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ ! $errors->has('closing-date') ?: 'has-danger' }}">
                    <label for="closing-date" class="col-sm-12 col-md-3 col-form-label">Closing Date</label>
                    <div class="col-sm-12 col-md-9">
                        <input class="form-control" type="text" id="closing-date" name="closing-date" value="{{ old('closing-date') }}">
                        @if ($errors->has('closing-date'))
                            <div class="form-control-feedback"><small>{{ $errors->first('closing-date') }}</small></div>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-sm-12 col-md-9 offset-md-3 d-flex flex-column flex-md-row">
                        <button class="btn btn-secondary mb-1 mb-md-0 mr-md-1">Save</button>
                        <button class="btn btn-secondary">Save and Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
