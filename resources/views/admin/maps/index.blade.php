@extends('app')

@section('main-content')

    <h1>maps <a href="{{ url('admin/maps/create') }}" class="btn btn-primary pull-right btn-sm">Add New Map</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th><th>Number</th><th>Name</th><th>Area</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($maps as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/maps', $item->id) }}">{{ $item->number }}</a></td><td>{{ $item->name }}</td><td>{{ $item->area }}</td>
                    <td>
                        <a href="{{ url('admin/maps/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/maps', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $maps->render() !!} </div>
    </div>

@endsection
