@extends('master')

@section('content')
	<h1> Add a new assignment</h1>

	<hr/>

	{!! Form::open(['url' => 'assignments']) !!}

		@include('assignments.form', ['submitButtonText' => 'Assign territory'])

	{!! Form::close() !!}

@stop
