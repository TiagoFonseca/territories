@extends('master')

@section('content')

	<h1>Edit: {!! $assignment->id!!} </h1>

	<hr/>

	{!! Form::model($assignment, ['method' => 'PATCH', 'action' => ['AssignmentsController@update', $assignment->id]]) !!}

				@include('assignments.form', ['submitButtonText' => 'Update Assignment'])

	{!! Form::close() !!}

@endsection
