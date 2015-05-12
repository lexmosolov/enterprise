<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', $value = null , $attributes = ['class' => 'form-control', 'placeholder' => 'Name']) !!}
</div>
<div class="hidden form-group">
    {!! Form::label('user_list', 'Users') !!}
    {!! Form::select('user_list[]', $users, null, ['class'=>'form-control', 'multiple']) !!}
</div>
{!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}