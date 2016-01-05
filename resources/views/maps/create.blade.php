@extends('master')

@section('content')
	<h1> Add a new territory</h1>

	<hr/>

	{!! Form::open(['url' => 'territories/maps']) !!}

		@include('maps.form', ['submitButtonText' => 'Create Territory'])

	{!! Form::close() !!}

@stop
