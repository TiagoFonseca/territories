@extends('app')

@section('main-content')
	<h1> Add a new map</h1>

	<hr/>

	{!! Form::open(['url' => 'admin/maps']) !!}

		@include('maps.form', ['submitButtonText' => 'Create Map'])

	{!! Form::close() !!}

@stop
