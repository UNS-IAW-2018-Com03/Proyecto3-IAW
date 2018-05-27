@extends('layouts.app')

@section('title','Panel de Reclamos')

@section('content')
<h1 class="page-header">Todos los reclamos</h1>
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="<?php echo asset('images/bars.png')?>" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">30 Nuevos</p>
        <p class="text-muted">Reclamos</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="<?php echo asset('images/pending.png')?>" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">20 Reclamos</p>
        <p class="text-muted">Pendientes</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="<?php echo asset('images/process.png')?>" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">26 Tareas</p>
        <p class="text-muted">En proceso</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="<?php echo asset('images/confirm.png')?>" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">15 Reclamos</p>
        <p class="text-muted">Finalizados</p>
      </div>
    </div>
  </div>
</div>
<hr />
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div id="map" class="mapa"></div>
  </div>
</div>
<!-- Fin Info -->
<!-- Tabla Reclamos -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Tabla de reclamos
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id Reclamo</th>
                                <th>Tipo</th>
                                <th>Usuario</th>
                                <th>Fecha - Hora</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Fin Tabla Reclamos -->

@endsection
