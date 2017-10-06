@extends('app')

@section('main-content')

    <h1>Slips <a href="{{ url('admin/slips/create') }}" class="btn btn-primary pull-right btn-sm">Add New Slip</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th><th>Map</th><th>Houses</th></th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($slips as $slip)
                {{-- */$x++;/* --}}
                <tr>
                    <td><a href= "{{ action('Admin\SlipsController@show', ($slip->id)) }}">{{ $slip->name }} </a></td>
                    <td><a href= "{{ action('Admin\MapsController@show', ($slip->map->id)) }}">{{$slip->map->number}} - {{$slip->map->name}}</td><td>houses</td>
                    <td>
                        <a href="{{ url('admin/slips/' . $slip->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/slips', $slip->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $slips->render() !!} </div>
    </div>

@endsection
