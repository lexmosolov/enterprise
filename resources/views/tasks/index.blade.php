@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tasks</h3>
        </div>

        @if ( !$tasks->count() )
            <div class="panel-body">You have no tasks.</div>
        @else
            <table class="table tree">
                @foreach ($tasks as $task)
                    @include('tasks.partials._task', $task)
                @endforeach
            </table>
        @endif

        <div class="panel-footer">
            <a href="{{ action('TasksController@create') }}" class="btn btn-success" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create
            </a>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        $('.tree').treegrid();
    </script>
@endsection