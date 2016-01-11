@extends('master')

@section('content')

	<h1>Edit: {!! $slip->name!!} </h1>

	<hr/>

	{!! Form::model($slip, ['method' => 'PATCH', 'action' => ['SlipsController@update', $slip->id]]) !!}

				@include('slips.form', ['submitButtonText' => 'Update Slip'])

	{!! Form::close() !!}

@endsection
