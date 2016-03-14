@extends('master')

@section('content')

	<h1>Edit: {!! $street->name!!} </h1>

	<hr/>

	{!! Form::model($street, ['method' => 'PATCH', 'action' => ['StreetsController@update', $street->id]]) !!}

				@include('streets.form', ['submitButtonText' => 'Update Street'])

	{!! Form::close() !!}

@endsection
