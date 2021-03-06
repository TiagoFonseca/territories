@extends('app')

@section('main-content')

    <h1>Edit Slip</h1>
    <hr/>

    {!! Form::model($slip, [
        'method' => 'PATCH',
        'url' => ['admin/slips', $slip->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('map') ? 'has-error' : ''}}">
                {!! Form::label('map', 'Map: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('map_id', (['0' => 'Select a Map'] + $maps), null, ['required' => 'required', 'class' => 'form-control']) !!}
                    {!! $errors->first('map', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
          
	
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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