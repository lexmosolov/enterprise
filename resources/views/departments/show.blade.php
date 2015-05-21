@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $department->title }}</h3>
        </div>
        @if ( !$department->users->count() )
            <div class="panel-body">
                Your department has no user.
            </div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $department->users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ action('UsersController@show', $user) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->role->title }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        <div class="panel-footer">
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'action' => array('DepartmentsController@destroy', $department))) !!}
            {!! link_to_action('DepartmentsController@edit', 'Edit', $department, array('class' => 'btn btn-info')) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
            {!! link_to_action('DepartmentsController@index', 'Back', [], ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection