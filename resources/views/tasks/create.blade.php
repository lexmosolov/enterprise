@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Create Task</h3>
        </div>
        {!! Form::model(new App\Task, ['route' => 'tasks.store']) !!}
        @include('tasks/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection