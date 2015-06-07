@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Organizations</h3>
        </div>
        @if ( !$organizations->count() )
            <div class="panel-body">
                You have no organizations.
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
                @foreach( $organizations as $organization )
                    <tr>
                        <td>{{ $organization->id }}</td>
                        <td>
                            <a href="{{ action('OrganizationsController@show', $organization) }}">{{ $organization->title }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <div class="panel-footer">
            <a href="{{ action('OrganizationsController@create') }}" class="btn btn-success" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create
            </a>
        </div>
    </div>

@endsection