@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">Edit User</div>
        <div class="panel-body">
            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update']]) !!}
            @include('users/partials/_form', ['submit_text' => 'Save Changes'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection