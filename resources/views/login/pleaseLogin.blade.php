<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('images/icon_nav.png') }}">
    <title>Mis Reclamos - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>


    <!-- Custom styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <!-- TABLE STYLES-->
	  <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet" />


  </head>
  <body>
    <!-- TopNav -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img id="logo" src="{{ asset('images/logo.png') }}" alt="miCiudad" />
        </div>
        <div id="navbar" class="navbar-collapse collapse myheader">
          <form class="navbar-form navbar-right" method="POST" action="/login">
            @csrf
            <div class="form-group">
              <input type="text" name="name" placeholder="Usuario" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Contraseña" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Fin TopNav -->
    <!-- BLoques Info -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        @yield('errorDialog')

    </div>
  </body>
</html>
