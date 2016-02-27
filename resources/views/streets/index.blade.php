@extends('master')

@section('content')
	<h1>
		Streets
	</h1>
	<hr/>
	<table class="table table-striped table-responsive">
		<thead>
	      <tr>
	        <th>Name</th>
	      </tr>
		</thead>
		<tbody>
			@foreach ($streets as $street)
				<tr>
					<td> {{$street->name}}  </td>
				</tr>
			@endforeach
    </tbody>
	</table>
@stop
