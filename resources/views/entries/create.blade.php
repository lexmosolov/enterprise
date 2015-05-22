@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Create Entry</h3>
        </div>
        {!! Form::model(new App\Entry, ['action' => 'EntriesController@store']) !!}
        @include('entries/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection