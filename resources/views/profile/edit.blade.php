@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Profile</h3>
        </div>

        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update']]) !!}
        <div class="panel-body">
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'New password') !!}
                {!! Form::password('password', ['placeholder'=>'Password', 'class'=>'form-control'] ) !!}
            </div>
        </div>
        <div class="panel-footer">
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            <a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
        </div>
        {!! Form::close() !!}

    </div>

@endsection