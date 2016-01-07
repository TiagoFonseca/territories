@extends('master')

@section('content')
	<h1> Add a new slip</h1>

	<hr/>

	{!! Form::open(['url' => 'slips']) !!}

		@include('slips.form', ['submitButtonText' => 'Create Slip'])

	{!! Form::close() !!}

@stop
