<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null , ['class' => 'form-control', 'placeholder' => 'Email']) !!}
</div>
{!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}