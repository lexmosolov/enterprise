<div class="panel-body">
    <div class="form-group">
        {!! Form::label('parent_id', 'Parent') !!}
        {!! Form::select('parent_id', ['No'] + $departments, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $value = null , $attributes = ['class' => 'form-control', 'placeholder' => 'Name']) !!}
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