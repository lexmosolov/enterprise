@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Entries</h3>
        </div>
        @if ( !$entries->count() )
            <div class="panel-body">You have no entry.</div>
        @else
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Creator</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $entries as $entry )
                    <tr>
                        <td>{{ $entry->created_at }}</td>
                        <td>{{ $entry->updated_at }}</td>
                        <td>{{ $entry->creator->name }}</td>
                        <td><a href="{{ action('EntriesController@show', $entry) }}">{{ $entry->title }}</a></td>
                        <td>{{ $entry->body }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <div class="panel-footer">
            <a href="{{ action('EntriesController@create') }}" class="btn btn-success" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create
            </a>
        </div>
    </div>

@endsection