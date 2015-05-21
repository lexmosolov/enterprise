@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">User</h3>
        </div>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>{{ $user->department->title or 'No'}}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ $user->role->title or 'No'}}</td>
            </tr>
            </tbody>
        </table>
        <div class="panel-footer">
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'action' => array('UsersController@destroy', $user))) !!}
            {!! link_to_action('UsersController@edit', 'Edit', $user, array('class' => 'btn btn-info')) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
            {!! link_to_action('UsersController@index', 'Back', [], ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection