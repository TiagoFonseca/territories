@extends('app')

@section('main-content')

    <h1>Create New House</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/houses', 'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('slip_id') ? 'has-error' : ''}}">
	    {!! Form::label('slip', 'Slip', ['class' => 'col-sm-3 control-label']) !!}
	     <div class="col-sm-6">
		    {!! Form::select('slip_id', (['0' => 'Select a Slip'] + $slips), null, ['required' => 'required', 'class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('slip_id') }}</small>
		 </div>
	</div>

	<div class="form-group {{ $errors->has('street_id') ? 'has-error' : ''}}">
		    {!! Form::label('street', 'Street', ['class' => 'col-sm-3 control-label']) !!}
		    <div class="col-sm-6">
		    	{!! Form::select('street_id', (['0' => 'Select a Street'] + $streets), null, ['required' => 'required', 'class' => 'form-control']) !!}
		    	<small class="text-danger">{{ $errors->first('street_id') }}</small>
			</div>
		</div>


	<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
		    {!! Form::label('number', 'Number:', ['class' => 'col-sm-3 control-label']) !!}
		    <div class="col-sm-6">
		    	{!! Form::text('number', null, ['class' => 'form-control']) !!}
		    	<small class="text-danger">{{ $errors->first('number') }}</small>
		    </div>
	</div>

    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
	    {!! Form::label('type', 'Type:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-6">
		    {!! Form::text('type', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('type') }}</small>
		</div>
	</div>

	<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
	    {!! Form::label('status', 'Status:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-6">
	    	{!! Form::text('status', null, ['class' => 'form-control']) !!}
	    	<small class="text-danger">{{ $errors->first('status') }}</small>
		</div>
	</div>

	<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
		{!! Form::label('description', 'Description:', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('description', null, ['class' => 'form-control']) !!}
			<small class="text-danger">{{ $errors->first('description') }}</small>
		</div>
	</div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection