@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Departments</h3>
        </div>
        @if ( !$departments->count() )
            <div class="panel-body">You have no departments.</div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $departments as $department )
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>
                            <a href="{{ action('DepartmentsController@show', $department) }}">{{ $department->title }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <div class="panel-footer">
            <a href="{{ action('DepartmentsController@create') }}" class="btn btn-success" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create
            </a>
        </div>
    </div>

@endsection