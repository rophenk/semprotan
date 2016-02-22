@extends('admin.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Tambah Kategori</div>
        <div class="panel-body">
          

          {!! Form::model(new App\Modules, ['class' => 'form-horizontal', 'route' => ['admin.category.store']]) !!}
          @include('admin.modulesForm', ['submit_text' => 'Tambah Data'])
          {!! Form::Close() !!}
        </div>
      </div>
  </div>
</div>
@endsection