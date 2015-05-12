@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">Edit Department</div>
        <div class="panel-body">
            {!! Form::model($department, ['method' => 'PATCH', 'route' => ['departments.update', $department]]) !!}
            @include('departments/partials/_form', ['panel_heading' => 'Edit Department'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection