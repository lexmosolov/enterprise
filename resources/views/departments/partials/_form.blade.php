<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $value = null , $attributes = ['class' => 'form-control', 'placeholder' => 'Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('head_id', 'User') !!}
    {!! Form::select('head_id', array_pluck($users, 'name', 'id'), $value = null, ['class'=>'form-control']) !!}
</div>
{!! Form::submit($submit_text, ['class'=>'btn btn-default']) !!}