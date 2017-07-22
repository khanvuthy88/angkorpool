@extends('layout.master')

@section('content')
<div class="card">
	<div class="card-block">
	@if($alerts->count() > 0)
		<div class="d-flex justify-content-start align-items-center pt-3 pb-3">
			<a href="{{ route('job.alert.create') }}" class="btn btn-secondary">Create New</a>
		</div>
		<table class="table">
			<thead>
			    <tr>
				    <th>#</th>
				    <th>Keyword</th>
				    <th>Industry</th>
				    <th>Job Type</th>
				    <th></th>
			    </tr>
			</thead>
		  	<tbody>
		  	@foreach($alerts as $index => $alert)
		    	<tr>
		      		<td>{{ $index + 1 }}</td>
		      		<td>{{ $alert->keyword }}</td>
		      		<td>{{ $alert->industry_name }}</td>
		      		<td>{{ $alert->job_type_name }}</td>
		      		<td>
		      			<a href="{{ route('job.alert.delete', [ 'id' => $alert->id ]) }}" class="btn btn-sm btn-danger" title="Delete">
		      				<i class="fa fa-trash-o"></i>
		      			</a>
		      		</td>
		    	</tr>
		    @endforeach
		  	</tbody>
		</table>

		@if($alerts->lastPage() > 1)
		<div class="d-flex justify-content-center align-items-center p-3">
            {{ $alerts->links() }}
        </div>
        @endif
    @else
    	<div class="d-flex justify-content-center align-items-center flex-column">
			<span>No data found</span><a href="{{ route('job.alert.create') }}" class="btn btn-secondary">Create New</a>
		</div>
    @endif
	</div>
</div>
@stop