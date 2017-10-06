@extends('frontend')

@section('content')
	<h1> 	 </h1>
	<small> <b>Last updated</b> {{ $assignment->assigned_on }}</small>
	<br><b>Assigned to<b/> {{ $assignment->user->name}} on:
	{{$assignment->assigned_on}}<br>	
		@if($assignment->finished_on)
				Finished on: {{$assignment->finished_on}}
		@endif
	<hr/>
	<article>  </article>

@stop
