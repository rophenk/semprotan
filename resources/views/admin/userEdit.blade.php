@extends('admin.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edit User</div>
        <div class="panel-body">
          

          {!! Form::model($user, ['method' => 'PATCH', 'route' => ['admin.users.update', $user->id], 'class' => 'form-horizontal']) !!}
          @include('admin.userForm', ['submit_text' => 'Edit Data'])
          {!! Form::Close() !!}
        </div>
      </div>
  </div>
</div>
@endsection