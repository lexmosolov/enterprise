@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">USERS</h3>
        </div>
        @if ( !$users->count() )
            <div class="panel-body">
                You have no users.
            </div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->department->title }}</td>
                        <td>{{ $user->role->title }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-success" role="button">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Create
    </a>

@endsection