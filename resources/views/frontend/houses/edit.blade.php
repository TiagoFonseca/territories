@extends('master')

@section('content')

	<h1>Edit: {!! $map->name!!} </h1>

	<hr/>

	{!! Form::model($map, ['method' => 'PATCH', 'action' => ['MapsController@update', $map->id]]) !!}

				@include('maps.form', ['submitButtonText' => 'Update Map'])

	{!! Form::close() !!}

@endsection
