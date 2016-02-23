@extends('admin.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><H4>Data Tautan untuk kategori : {{ $modules->title }}</H4></div>
        <div class="panel-body">
          <p>
            {!! link_to_route('admin.category.links.create', 'Tambah Data Tautan', $modules->id, array('class' => 'btn btn-info')) !!}
          </p>
          <table class="table table-hover table-striped display" id="datatable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Judul</th>
                <th>Alamat URL</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Judul</th>
                <th>Alamat URL</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </tfoot>
            <tbody>
              @forelse($modules->content as $moduleContent)
              <tr>
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('admin.category.links.destroy', $modules->id, $moduleContent->id))) !!}
              <td>{{ $moduleContent->title }}</td>
              <td>{{ $moduleContent->address }}</td>
              <td><a href="/admin/category/{{$modules->id}}/links/{{$moduleContent->id}}/edit" class="btn btn-info">Edit</a></td>
              <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
              {!! Form::close() !!}
              @empty
                  DATA TIDAK DITEMUKAN
              </tr>
              @endforelse
            </tbody>
          </table>

  </div>
</div>
@endsection