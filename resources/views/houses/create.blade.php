@extends('master')

@section('content')
	<h1> Add a new map</h1>

	<hr/>

	{!! Form::open(['url' => 'maps']) !!}

		@include('maps.form', ['submitButtonText' => 'Create Map'])

	{!! Form::close() !!}

@stop
