@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">Create Task for "{{ $project->name }}"</div>
        <div class="panel-body">
            {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
            @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection