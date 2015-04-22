@extends('app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{!! link_to_route('projects.index', 'Projects' ) !!} / {!!
            link_to_route('projects.show', $project->name, [$project->slug]) !!} / {{ $task->name }}</div>
        <div class="panel-body">
            {{ $task->description }}
        </div>
    </div>
    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
    {!! link_to_route('projects.tasks.edit', 'Edit Task', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}
    {!! Form::submit('Delete Task', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}

@endsection