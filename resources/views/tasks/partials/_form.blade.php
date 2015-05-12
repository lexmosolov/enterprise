<div class="panel-body">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('guarantor_id', 'Guarantor') !!}
        {!! Form::select('guarantor_id', $users, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('performer_id', 'Performer') !!}
        {!! Form::select('performer_id', $users, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('deadline', 'Deadline') !!}
        {!! Form::date('deadline', null, ['class' => 'form-control']) !!}
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
