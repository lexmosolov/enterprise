@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">EDIT TASK</h3>
        </div>
        {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task]]) !!}
        @include('tasks/partials/_form', ['panel_heading' => 'EDIT TASK'])
        {!! Form::close() !!}
    </div>

@endsection