@extends('master')

@section('content')
	<h1> Add a new street</h1>

	<hr/>

	{!! Form::open(['url' => 'streets']) !!}

		@include('streets.form', ['submitButtonText' => 'Create Street'])

	{!! Form::close() !!}

@stop
