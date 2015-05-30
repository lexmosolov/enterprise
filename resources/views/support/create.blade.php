@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Support</h3>
        </div>
        {!! Form::open(['action' => 'SupportController@send']) !!}
        <div class="panel-body">
            <div class="form-group">
                {!! Form::label('problem', 'Problem') !!}
                {!! Form::textarea('problem', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="panel-footer">
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            <a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
