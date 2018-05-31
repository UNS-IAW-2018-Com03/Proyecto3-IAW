<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo asset('images/icon_nav.png')?>">
    <title>Mis Reclamos - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet"/>


    <!-- Custom styles -->
    <link href="<?php echo asset('css/dashboard.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/custom.css')?>" rel="stylesheet" />
    <!-- TABLE STYLES-->
	  <link href="<?php echo asset('css/dataTables.bootstrap.css')?>" rel="stylesheet" />


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
          <img id="logo" src="<?php echo asset('images/logo.png')?>" alt="miCiudad" />
        </div>
        <div id="navbar" class="navbar-collapse collapse myheader">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Usuario" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Contraseña" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Fin TopNav -->
    <!-- SideNav -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active">Panel de Reclamos</li>
            <li><a href="/mapaCalor">Mapa de Calor</a></li>
            <li><a href="/">Tabla de Reclamos</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active">Administrar Reclamos</li>
            <li><a href="/reclamo/create">Agregar</a></li>
            <li><a href="/reclamo">Modificar/Eliminar</a></li>
          </ul>
          <ul class="nav nav-sidebar">
			      <li class="active">Resolver Reclamos</li>
            <li><a href="/tablaDeReclamos">Tabla de Reclamos</a></li>
          </ul>
        </div>
        <!-- Fin SideNav -->
        <!-- BLoques Info -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            @yield('content')

        </div>
      </div>
    </div>

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
  </body>
</html>
