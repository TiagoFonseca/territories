@extends('master')

@section('content')
	<h1> 	{{ $map->name }} </h1>
	<small> <b>Last updated</b> {{ $map->updated_at->diffForHumans() }}</small>	@if($name) <div class="alert alert-info" role="alert"><b>This map is currently assigned to <b/>
		{{$name}} </div>
	@endif
	<hr/>

	@foreach($theSlip as $slip)
		<h3> {{$slip->name}}	</h3>
		@foreach($streets as $street)
			{{$street->name}}
			@foreach($slip->houses as $house)
					<div style="margin-left:4rem">{{$house->number}}</div>
			@endforeach
		@endforeach

	@endforeach

	{{-- @foreach ($listSlips as $slip)
		<article> {{ $slip->name }} </article>
	@endforeach

	<article> <b>Houses</b> </article>

	@foreach($listStreets as $street)
		{{ $house->number }}
	@endforeach --}}

@stop
