@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">CREATE USER</h3>
        </div>
        {!! Form::model(new App\User, ['route' => ['users.store']]) !!}
        @include('users/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection