@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Task</h3>
        </div>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th>Parent</th>
                <td>{{ $task->parent->name or 'No' }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $task->name }}</td>
            </tr>
            <tr>
                <th>Completed</th>
                <td><input type="checkbox" {{ $task->completed ? 'checked' : 'unchecked' }} disabled></td>
            </tr>
            <tr>
                <th>Guarantor</th>
                <td>{{ $task->guarantor->name }}</td>
            </tr>
            <tr>
                <th>Performer</th>
                <td>{{ $task->performer->name }}</td>
            </tr>
            <tr>
                <th>Deadline</th>
                <td>{{ $task->deadline }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $task->description }}</td>
            </tr>
            </tbody>
        </table>
        <div class="panel-footer">
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'action' => array('TasksController@destroy', $task))) !!}
            {!! link_to_action('TasksController@edit', 'Edit', $task, ['class' => 'btn btn-info']) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
            {!! link_to_action('TasksController@index', 'Back', [], ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection