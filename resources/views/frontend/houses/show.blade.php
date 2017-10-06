@extends('master')

@section('content')
	<h1> 	{{ $map->name }} </h1>
	<small> <b>Last updated</b> {{ $map->updated_at->diffForHumans() }}</small>	@if($name) <div class="alert alert-info" role="alert"><b>This map is currently assigned to <b/>
		{{$name}} </div>
	@endif
	<hr/>
	<article> {{ $map->name }} </article>

@stop
