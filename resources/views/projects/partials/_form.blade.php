<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $value = null , $attributes = ['class' => 'form-control', 'placeholder' => 'Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', $value = null , $attributes = ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_id', 'User') !!}
    {!! Form::select('user_id', array_pluck($users, 'name', 'id'), $value = null, ['class'=>'form-control']) !!}
</div>
{!! Form::submit($submit_text, ['class'=>'btn btn-default']) !!}