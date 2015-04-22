@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            Departments
            {{--<span class="badge">{{ $projects->count() }}</span>--}}
        </div>

        @if ( !$departments->count() )
            <div class="panel-body">
                You have no departments.
            </div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Head</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $departments as $department )
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>
                            <a href="{{ route('departments.show', $department->slug) }}">{{ $department->name }}</a>
                        </td>
                        <td>{{ $department->head->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>


    <a href="{{ route('departments.create') }}" class="btn btn-success" role="button">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Create Department
    </a>

@endsection