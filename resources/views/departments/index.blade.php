@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Departments</h3>
        </div>

        @if ( !$departments->count() )
            <div class="panel-body">You have no departments.</div>
        @else
            <table class="table tree">
                @foreach ($departments as $department)
                    @include('departments.partials._department', $department)
                @endforeach
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

@section('footer')
    <script>
        $('.tree').treegrid();
    </script>
@endsection