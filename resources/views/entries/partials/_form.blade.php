<div class="panel-body">
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('department_list', 'Departments') !!}
        {!! Form::select('department_list[]', $departments, null, ['class'=>'form-control select2', 'multiple']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('user_list', 'Users') !!}
        {!! Form::select('user_list[]', $users, null, ['class'=>'form-control select2', 'multiple']) !!}
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