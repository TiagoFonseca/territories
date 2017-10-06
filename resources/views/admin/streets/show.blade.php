
@extends('app')

@section('main-content')
	<h1> 	{{$street->name}} </h1>

    
			@foreach($street->houses as $house)
				<ul>
					<li>{{$house->number}}</li>
				</ul>
			@endforeach


@stop