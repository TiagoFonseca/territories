@extends('app')

@section('main-content')

    <h1>Edit Map</h1>
    <hr/>

    {!! Form::model($map, [
        'method' => 'PATCH',
        'url' => ['admin/maps', $map->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
                {!! Form::label('number', 'Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
                {!! Form::label('area', 'Area: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('picture') ? 'has-error' : ''}}">
                {!! Form::label('picture', 'Picture: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('picture', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tags') ? 'has-error' : ''}}">
                {!! Form::label('tags', 'Tags: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tags', '<p class="help-block">:message</p>') !!}
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