@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">EDIT USER</h3>
        </div>
        {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user]]) !!}
        @include('users/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection