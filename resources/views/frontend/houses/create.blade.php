@extends('master')

@section('content')
	<h1> Add a new house</h1>

	<hr/>

	{!! Form::open(['url' => 'houses']) !!}

		@include('houses.form', ['submitButtonText' => 'Create house'])

	{!! Form::close() !!}

@stop
