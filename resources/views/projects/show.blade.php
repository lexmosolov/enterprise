@extends('app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            {!! link_to_route('projects.index', 'Projects' ) !!} / {{ $project->name }}
        </div>

        @if ( !$project->tasks->count() )
            <div class="panel-body">
                Your project has no tasks.
            </div>
        @else

            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $project->tasks as $task )
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>
                            <a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a>
                        </td>
                        <td>Working</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
    {!! link_to_route('projects.tasks.create', 'Create Task', $project->slug, array('class' => 'btn btn-success')) !!}
    {!! link_to_route('projects.edit', 'Edit Project', array($project->slug), array('class' => 'btn btn-info')) !!}
    {!! Form::submit('Delete Project', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}

@endsection