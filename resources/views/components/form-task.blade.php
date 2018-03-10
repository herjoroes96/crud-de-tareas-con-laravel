<div class="form-group">
    {{ Form::label('name', null, ['class' => 'control-label']) }}
    {{ Form::text('name', null, array_merge(['class' => 'form-control'])) }}
</div>
<div class="form-group">
    {{ Form::label('due_date', null, ['class' => 'control-label']) }}
    {{ Form::date('due_date', null, array_merge(['class' => 'form-control','min' => date('Y-m-d')])) }}
</div>
<div class="form-group">
    {{ Form::label('state', null, ['class' => 'control-label']) }}
    {{ Form::select('state', ['ACTIVE'=>'ACTIVE','INACTIVE'=>'INACTIVE'], null ,array_merge(['class' => 'form-control'])) }}
</div>
{{ Form::submit('Submit', array_merge(['class' => 'btn btn-primary btn-block'])) }}