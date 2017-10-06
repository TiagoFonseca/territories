

@extends('app')

@section('main-content')
	<h1> 	{{$mapName}} </h1>

		@foreach($myData['slip'] as $key => $slip)
			<ul>
				<li>Slip	{{$key}}</li>
			@foreach($slip['street'] as $key => $street)
				<ul>

				<li> {{$key}} </li>
				@foreach($street['house'] as $key => $house)
					<ul>
						<li>{{$house}}</li>
					</ul>
				@endforeach
				</ul>
			@endforeach
		</ul>
		@endforeach

@stop
