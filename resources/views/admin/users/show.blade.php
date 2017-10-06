@extends('app')

@section('main-content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Email</th><th>Mobile</th><th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->name }} </td><td> {{ $user->email }} </td><th>{{ $user->mobile }}</th><th>{{ $user->role }}</th>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection