<div class="panel-body">
    <div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', $value = null , $attributes = ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    </div>
    <div class="hidden form-group">
    {!! Form::label('user_list', 'Users') !!}
    {!! Form::select('user_list[]', $users, null, ['class'=>'form-control', 'multiple']) !!}
    </div>
</div>
<div class="panel-footer">
    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    <a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
</div>
