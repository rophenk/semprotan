@extends('admin.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Kategori</div>
        <div class="panel-body">
          

          {!! Form::model($modules, ['method' => 'PATCH', 'route' => ['admin.category.update', $modules->id], 'class' => 'form-horizontal']) !!}
          @include('admin.modulesForm', ['submit_text' => 'Edit Data'])
          {!! Form::Close() !!}
        </div>
      </div>
  </div>
</div>
@endsection