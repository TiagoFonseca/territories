@extends('master')

@section('content')
	<h1> 	{{ $map->name }} </h1>
	<small> <b>Last updated</b> {{ $map->updated_at->diffForHumans() }}</small>	@if($name) <div class="alert alert-info" role="alert"><b>This map is currently assigned to <b/>
		{{$name}} </div>
	@endif
	<hr/>

	@foreach ($listSlips as $slip)
		<article> {{ $slip->name }} </article>
	@endforeach

	<article> <b>Houses</b> </article>

	@foreach($ass_houses as $house)
		{{ $house->number }}
	@endforeach

@stop
