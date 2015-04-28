@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">Edit Task</div>
        {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task]]) !!}
        @include('tasks/partials/_form', ['panel_heading' => 'Edit Department'])
        {!! Form::close() !!}
    </div>

@endsection