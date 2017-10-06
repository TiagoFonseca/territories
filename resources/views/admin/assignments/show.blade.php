@extends('app')

@section('main-content')

    <h1>Assignment</h1>

    
    	@foreach($myData['slip'] as $key => $slip)
		<ul>
			<li><h3>Slip	{{$key}}</h3></li>
				@foreach($slip['street'] as $key => $street)
				<ul>
					<li> <b>{{$key}}</b> </li>
					@foreach($street as $house)
					<ul>
						<li class="{{ $house['status'] ? 'house-done' : 'red'  }}" > {{$house['number']}} </li>
					</ul>
					@endforeach
				</ul>
				@endforeach
		</ul>
	@endforeach

@endsection