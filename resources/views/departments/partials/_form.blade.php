<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $value = null , $attributes = ['class' => 'form-control', 'placeholder' => 'Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('head_id', 'Head') !!}
    {!! Form::select('head_id', $users, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_list', 'Users') !!}
    {!! Form::select('user_list[]', $users, null, ['class'=>'form-control', 'multiple']) !!}
</div>
{!! Form::submit($submit_text, ['class'=>'btn btn-default']) !!}