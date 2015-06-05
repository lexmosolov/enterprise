<div class="panel-body">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('department_list', 'Departments') !!}
        {!! Form::select('department_list[]', $departments, null, ['class'=>'form-control select2', 'multiple']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="panel-footer">
    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    <a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
</div>

@section('footer')
    <script>
        $(".select2").select2({
            allowClear: true,
            closeOnSelect: false
        });
    </script>
@endsection
