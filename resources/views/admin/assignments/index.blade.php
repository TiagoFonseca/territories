@extends('app')

@section('main-content')

    <h1>Assignments <a href="{{ url('admin/assignments/create') }}" class="btn btn-primary pull-right btn-sm">Add New Assignment</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Number</th><th>Publisher</th><th>Map</th><th>Assigned On</th><th>Finished On</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <!--{{-- */$x=0;/* --}}-->
            @foreach($assignments as $item)
                <!--{{-- */$x++;/* --}}-->
                <tr>
                    <td><a href="{{ url('admin/assignments', $item->id) }}">{{ $item->id }}</a></td>
                    <td><a href="{{ url('admin/users', $item->user->id) }}">{{ $item->user->name }}</a></td>
                    <td>{{ $item->map->number }} - {{ $item->map->name }}</td>
                    <td>{{ $item->assigned_on->diffForHumans() }}</td>
                    <td>{{ $item->finished_on }}</td>
                    <td>
                        <a href="{{ url('admin/assignments/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/assignments', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $assignments->render() !!} </div>
    </div>

@endsection
