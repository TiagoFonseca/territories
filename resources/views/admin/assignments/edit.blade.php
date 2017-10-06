@extends('app')

@section('main-content')

    <h1>Edit Assignment</h1>
    <hr/>

    {!! Form::model($assignment, [
        'method' => 'PATCH',
        'url' => ['admin/assignments', $assignment->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                {!! Form::label('user_id', 'User Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('map_id') ? 'has-error' : ''}}">
                {!! Form::label('map_id', 'Map Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('map_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('map_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('assigned_on') ? 'has-error' : ''}}">
                {!! Form::label('assigned_on', 'Assigned On: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
	                {!! Form::input('date', 'assigned_on', date('Y-m-d'), ['class' => 'form-control']) !!}
                    {!! $errors->first('assigned_on', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('finished_on') ? 'has-error' : ''}}">
                {!! Form::label('finished_on', 'Finished On: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
	                {!! Form::input('date', 'finished_on', date('Y-m-d'), ['class' => 'form-control']) !!}
                    {!! $errors->first('finished_on', '<p class="help-block">:message</p>') !!}
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