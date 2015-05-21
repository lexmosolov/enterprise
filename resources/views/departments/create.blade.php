@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Create Department</h3>
        </div>
        {!! Form::model(new App\Department, ['action' => 'DepartmentsController@store']) !!}
        @include('departments/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection