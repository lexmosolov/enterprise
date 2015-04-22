@extends('app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            {!! link_to_route('departments.index', 'Departments' ) !!} / {{ $department->name }}
        </div>

        @if ( !$department->users->count() )
            <div class="panel-body">
                Your department has no user.
            </div>
        @else

            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody data-link="row" class="rowlink">
                @foreach( $department->users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('departments.destroy', $department->slug))) !!}
    {-- link_to_route('departments.tasks.create', 'Create Task', $department->slug, array('class' => 'btn btn-success')) --}
    {!! link_to_route('departments.edit', 'Edit Department', array($department->slug), array('class' => 'btn btn-info')) !!}
    {!! Form::submit('Delete Department', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}

@endsection