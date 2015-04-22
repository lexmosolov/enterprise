@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">Edit Project</div>
        <div class="panel-body">
            {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
            @include('projects/partials/_form', ['submit_text' => 'Save Changes'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection