@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Create User</h3>
        </div>
        {!! Form::model(new App\User, ['action' => ['UsersController@store']]) !!}
        @include('users/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection