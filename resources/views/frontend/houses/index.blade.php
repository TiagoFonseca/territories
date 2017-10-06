@extends('master')

@section('content')
	<h1>
		Houses
	</h1>
	<hr/>
	<table class="table table-striped table-responsive">
		<thead>
	      <tr>
					<th>Slip</th>
	        <th>Number</th>
	        <th>Street</th>
	        <th>Type</th>
					<th>Status</th>
	      </tr>
		</thead>
		<tbody>
			@foreach ($houses as $house)
				<tr>
					<td> {{ $house->slip->name }} </td>
					<td> <a href= "{{ action('HousesController@show', ($house->id)) }}"> {{ $house->number }} </a>	</td>
					<td> {{ $house->street->name}}	</td>
					<td> {{ $house->type }}	</td>
					<td> {{ $house->status }} </td>
				</tr>
			@endforeach
    </tbody>
	</table>
@stop
