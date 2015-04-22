@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">Create Project</div>
        <div class="panel-body">
            {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
            @include('projects/partials/_form', ['panel_heading' => 'Create Project','submit_text' => 'Create Project'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection