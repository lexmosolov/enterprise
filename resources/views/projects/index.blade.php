@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            Projects
            {{--<span class="badge">{{ $projects->count() }}</span>--}}
        </div>

        @if ( !$projects->count() )
            <div class="panel-body">
                You have no projects.
            </div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Performer</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $projects as $project )
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                        </td>
                        <td>{{ $project->user->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>


    <a href="{{ route('projects.create') }}" class="btn btn-success" role="button">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Create Project
    </a>

@endsection