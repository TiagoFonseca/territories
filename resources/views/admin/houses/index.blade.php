@extends('app')

@section('main-content')

    <h1>Houses <a href="{{ url('admin/houses/create') }}" class="btn btn-primary pull-right btn-sm">Add New House</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                   <th>Slip number</th><th>Street name</th><th>House number</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($houses as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <!--<td>{{ $x }}</td>-->
                    <td><a href="{{ url('admin/slips', $item->slip->id) }}">{{ $item->slip->name }}</a></td>
                    <td><a href="{{ url('admin/streets', $item->street->id) }}">{{ $item->street->name }}</a></td>
                    <td>{{ $item->number }}</td>
                    <td>
                        <a href="{{ url('admin/houses/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/houses', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $houses->render() !!} </div>
    </div>

@endsection
