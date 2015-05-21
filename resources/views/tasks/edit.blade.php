@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Task</h3>
        </div>
        {!! Form::model($task, ['method' => 'PATCH', 'action' => ['TasksController@update', $task]]) !!}
        @include('tasks/partials/_form', ['panel_heading' => 'EDIT TASK'])
        {!! Form::close() !!}
    </div>

@endsection