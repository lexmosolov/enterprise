@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{!! link_to_route('users.index', 'Users' ) !!} / {{ $user->name }} </div>
        <div class="panel-body">
            {!! Form::model($user) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Name', 'readonly']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null , ['class' => 'form-control', 'placeholder' => 'Name', 'readonly']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('users.destroy', $user))) !!}
            {!! link_to_route('users.edit', 'Edit', $user, array('class' => 'btn btn-info')) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
            {!! Form::close() !!}
        </div>


    </div>


@endsection