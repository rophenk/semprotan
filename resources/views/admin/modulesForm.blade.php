<div class="form-group">
  {!! Form::label('name', 'Nama', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('name', null, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('title', 'Judul', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('title', null, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('icon', 'Icon', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('icon', null, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('color', 'Color', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('color', null, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
    {!! Form::submit($submit_text, ['class' => 'btn primary']) !!}
  </div>
</div>