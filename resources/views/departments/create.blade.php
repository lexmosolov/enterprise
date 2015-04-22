@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">Create Department</div>
        <div class="panel-body">
            {!! Form::model(new App\Department, ['route' => ['departments.store']]) !!}
            @include('departments/partials/_form', ['panel_heading' => 'Create Department','submit_text' => 'Create Department'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection