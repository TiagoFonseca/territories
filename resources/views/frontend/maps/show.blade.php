@extends('frontend')

@section('content')
	
		<h1>	{{$myMap['name']}} </h1>
		<div class="row">
			
			@foreach($myData['slip'] as $key => $slip)
			
				<div class="col s11 m6 l4 offset-1">
					<div class="card">

					<div class="card-content">
						<div class="card-title"><h5>Slip {{$key}}</h5></div>
					
					@foreach($slip['street'] as $key => $street)
					
						 <div>{{$key}}</div>
					
						@foreach($street['house'] as $key => $house)
							
							<div class="ident-1">
								<input type="checkbox" id="house".{{$house}}."-dis" disabled="disabled" />
	        					<label for="house"".{{$house}}.""-dis">{{$house}}</label>
							</div>
							
						@endforeach
					
					@endforeach
					
					</div>
					</div>
				</div>
			@endforeach
	
	</div>
@stop
