@extends('admin.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Tambah Tautan Untuk Kategori : {{ $modules->title }}</div>
        <div class="panel-body">
          

          {!! Form::model(new App\ModulesContent, ['class' => 'form-horizontal', 'route' => ['admin.category.links.store', $modules->id]]) !!}
          @include('admin.modulesContentForm', ['submit_text' => 'Tambah Data'])
          {!! Form::Close() !!}
        </div>
      </div>
  </div>
</div>
@endsection