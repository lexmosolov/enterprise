@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $organization->title }}</h3>
        </div>

        @if ( !$organization->departments->count() )
            <div class="panel-body">
                Your organization has no department.
            </div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $organization->departments as $department )
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td><a href="{{ action('DepartmentsController@show', $department) }}">{{ $department->title }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <div class="panel-footer">
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'action' => array('OrganizationsController@destroy', $organization))) !!}
            {!! link_to_action('OrganizationsController@edit', 'Edit', $organization, array('class' => 'btn btn-info')) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
            {!! link_to_action('OrganizationsController@index', 'Back', [], ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
