@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tasks</h3>
        </div>
        @if ( !$tasks->count() )
            <div class="panel-body">You have no tasks.</div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Completed</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $tasks as $task )
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td><a href="{{ route('tasks.show', $task) }}">{{ $task->name }}</a></td>
                        <td><input type="checkbox" {{ $task->completed ? 'checked' : 'unchecked' }} disabled></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <div class="panel-footer">
            <a href="{{ route('tasks.create') }}" class="btn btn-success" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create
            </a>
        </div>
    </div>

@endsection