@extends('master')

@section('content')
	<h1> 	Slip {{ $slip->name }} </h1>
	<small> {{ $slip->map->name }}
		<h2>
			Houses
		</h2>
		<hr/>
		<table class="table table-striped table-responsive">
			<thead>
		      <tr>
		        <th>Number</th>
		        <th>Street</th>
						<th>Type</th>
		        <th>Status</th>

		      </tr>
			</thead>
			<tbody>
				@foreach ($ass_houses as $house)
					<tr>
						<td> {{ $house->number }}	</td>
						<td> {{ $house->street }} </td>
						<td> {{ $house->type }} </td>
						<td> {{ $house->status }}	</td>

					</tr>
				@endforeach
	    </tbody>
		</table>

@stop
