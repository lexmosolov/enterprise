@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">USER</h3>
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
                <td>{{ $user->department->title }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ $user->role->title }}</td>
            </tr>
            </tbody>
        </table>
        <div class="panel-footer">
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('users.destroy', $user))) !!}
            {!! link_to_route('users.edit', 'Edit', $user, array('class' => 'btn btn-info')) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
            {!! link_to_route('users.index', 'Back', [], ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>

    </div>

@endsection