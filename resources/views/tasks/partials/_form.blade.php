<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $value = null, $attributes = ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', $value = null, $attributes = ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, $attributes = ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('completed', 'Completed') !!}
    {!! Form::checkbox('completed', 'value', false, $attributes = ['class' => 'checkbox']) !!}
</div>

{!! Form::submit($submit_text, ['class'=>'btn btn-default']) !!}