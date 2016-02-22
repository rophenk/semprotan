<div class="form-group">
  {!! Form::label('title', 'Judul', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('title', $link->title, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('address', 'Alamat URL', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-6">
    {!! Form::text('address', $link->address, array('class' => 'form-control'), '') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
    {!! Form::hidden('modules_id', $modules->id, array('class' => 'form-control'), '') !!}
    {!! Form::hidden('modules_uuid', $modules->uuid, array('class' => 'form-control'), '') !!}
    {!! Form::submit($submit_text, ['class' => 'btn primary']) !!}
  </div>
</div>