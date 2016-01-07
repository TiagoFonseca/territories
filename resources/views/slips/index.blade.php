@extends('master')

@section('content')
	<h1>
		Slips
	</h1>
	<hr/>
	<table class="table table-striped table-responsive">
		<thead>
	      <tr>
	        <th>Name</th>
	        <th>Map</th>
	        <th>Houses</th>

	      </tr>
		</thead>
		<tbody>
			@foreach ($slips as $slip)
				<tr>
					<td> {{ $slip->name }} </a>	</td>
					<td> {{ $slip->map->number }} - {{ $slip->map->name }} </td>
					<td> houses	</td>

				</tr>
			@endforeach
    </tbody>
	</table>
@stop
