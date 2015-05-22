@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Entry</h3>
        </div>
        {!! Form::model($entry, ['method' => 'PATCH', 'action' => ['EntriesController@update', $entry]]) !!}
        @include('entries/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection