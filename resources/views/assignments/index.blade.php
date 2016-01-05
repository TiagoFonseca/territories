@extends('master')

@section('content')
	<h1>
		Assignments
	</h1>
	<hr/>
	<table class="table table-striped table-responsive">
		<thead>
	      <tr>
	        <th>Number</th>
	        <th>Publisher</th>
	        <th>Map</th>
					<th>Assigned on</th>
					<th>Finished on</th>
	      </tr>
		</thead>
		<tbody>
			@foreach ($assignments as $assignment)
				<tr>
					<td> <a href= "{{ action('AssignmentsController@show', ($assignment->id)) }}"> {{ $assignment->id }} </a>	</td>
					<td> {{ $assignment->user->name }} </td>
					<td> {{ $assignment->map->number}} - {{ $assignment->map->name }}	</td>
					<td> @if($assignment->assigned_on)
								{{ $assignment->assigned_on->format('d-m-Y') }}
					@endif	</td>
					<td> @if($assignment->finished_on)
								{{ $assignment->finished_on->format('d-m-Y') }}
					@endif	</td>
				</tr>
			@endforeach
    </tbody>
	</table>
@stop
