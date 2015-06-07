<div class="panel-body">
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="panel-footer">
    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    <a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
</div>