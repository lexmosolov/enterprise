@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Organization</h3>
        </div>
        {!! Form::model($organization, ['method' => 'PATCH', 'action' => ['OrganizationsController@update', $organization]]) !!}
        @include('organizations/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection