@extends('app')

@section('main-content')

    <h1>House</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Slip</th><th>Street</th><th>Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $house->id }}</td> <td> {{ $house->slip }} </td><td> {{ $house->street }} </td><td> {{ $house->number }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection