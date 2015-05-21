@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Department</h3>
        </div>
        {!! Form::model($department, ['method' => 'PATCH', 'action' => ['DepartmentsController@update', $department]]) !!}
        @include('departments/partials/_form', ['panel_heading' => 'Edit Department'])
        {!! Form::close() !!}
    </div>

@endsection