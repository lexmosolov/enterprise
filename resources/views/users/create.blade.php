@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">Create User</div>
        <div class="panel-body">
            {!! Form::model(new App\User, ['route' => ['users.store']]) !!}
            @include('users/partials/_form', ['submit_text' => 'Create User'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection