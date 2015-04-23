@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">Edit Project</div>
        <div class="panel-body">
            {!! Form::model($department, ['method' => 'PATCH', 'route' => ['departments.update', $department]])
            !!}
            @include('departments/partials/_form', ['submit_text' => 'Save Changes'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection