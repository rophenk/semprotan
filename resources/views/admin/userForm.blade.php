<div class="form-group">
  {!! Form::label('name', 'Nama', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('name', null, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('email', 'Email', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('email', null, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('password', 'Password', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::password('password', null, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
    {!! Form::submit($submit_text, ['class' => 'btn primary']) !!}
  </div>
</div>