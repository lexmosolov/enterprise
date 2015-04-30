<div class="panel-body">
    <div class="form-group">
        {!! Form::label('namez', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label>
                {!! Form::hidden('completed', 0) !!}
                {!! Form::checkbox('completed') !!}
                <p>Completed</p>
            </label>
        </div>
    </div>
</div>
<div class="panel-footer">
    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    <a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
</div>

