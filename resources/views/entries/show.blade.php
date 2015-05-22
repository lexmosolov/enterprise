@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Entry</h3>
        </div>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th>Creator</th>
                <td>{{ $entry->creator->name }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ $entry->title }}</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>{{ $entry->body }}</td>
            </tr>
            <tr>
                <th>Departments</th>
                <td>
                    @foreach($entry->departments as $department)
                        <li>{{ $department->title }}</li>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>Users</th>
                <td>
                    @foreach($entry->users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </td>
            </tr>

            </tbody>
        </table>
        <div class="panel-footer">
            {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE',
            'action' => array('EntriesController@destroy', $entry)]) !!}
            {!! link_to_action('EntriesController@edit', 'Edit', $entry, ['class' => 'btn btn-info']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! link_to_action('EntriesController@index', 'Back', [], ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection