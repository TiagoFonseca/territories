@extends('master')

@section('content')
	<h1> 	{{$slipName}} </h1>


		@foreach($myData['street'] as $key => $street)
			<ul>

			<li> {{$key}} </li>
			@foreach($street['house'] as $key => $house)
				<ul>
					<li>{{$house}}</li>
				</ul>
			@endforeach
			</ul>
		@endforeach



@stop
