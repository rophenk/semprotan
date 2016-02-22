<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIMFORTA Admin Panel</title>

	<link href="{{ asset('/simforta/css/app.min.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respong.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- [if lt IE 9] >
	<script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif] -->
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">SIMFORTA</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('/admin/home')}}">Home</a></li>
          <li><a href="{{ url('/admin/category')}}">Kategori</a></li>
          <!--<li><a href="{{ url('/admin/links')}}">Tautan</a></li>-->
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/auth/login')}}">Login</a></li>
            <li><a href="{{ url('/auth/register')}}">Register</a></li>
 
        </ul>

      </div>
    </div>
  </nav>

  @yield('content')

  <!-- Scripts -->
  {!! Html::script('simforta/js/jquery-2.1.1.min.js') !!}
  {!! Html::script('simforta/js/bootstrap.min.js') !!}
</body>
</html>