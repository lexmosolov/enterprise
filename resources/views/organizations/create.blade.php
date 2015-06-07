@extends('app')

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Create Organization</h3>
        </div>
        {!! Form::model(new App\Organization, ['action' => ['OrganizationsController@store']]) !!}
        @include('organizations/partials/_form')
        {!! Form::close() !!}
    </div>

@endsection