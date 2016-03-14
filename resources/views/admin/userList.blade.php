@extends('admin.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Data Users</div>
        <div class="panel-body">
          <p>
            {!! link_to_route('admin.users.create', 'Tambah User', NULL, array('class' => 'btn btn-info')) !!}
          </p>
          <table class="table table-hover table-striped display" id="datatable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </tfoot>
            <tbody>
              @forelse($users as $user)
              <tr>
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('admin.users.destroy', $user->id))) !!}
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td><a href="/admin/users/{{$user->id}}/edit" class="btn btn-info">Edit</a></td>
              <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick' => 'if(!confirm(\'Anda yakin akan menghapus data ini ?\')){return false;};')) !!}</td>
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