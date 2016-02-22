@extends('admin.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Tautan Untuk Kategori : {{ $modules->title }}</div>
        <div class="panel-body">
          

          {!! Form::model($modules, ['method' => 'PATCH', 'route' => ['admin.category.links.update', $modules->id, $link->id], 'class' => 'form-horizontal']) !!}
          @include('admin.modulesContentFormEdit', ['submit_text' => 'Edit Data'])
          {!! Form::Close() !!}
        </div>
      </div>
  </div>
</div>
@endsection