@extends('layouts.app')

@section('title','Panel de Reclamos')

@section('content')
<h1 class="page-header">Todos los reclamos</h1>
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="{{asset('images/bars.png')}}" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">{{$cantTotal}} Reclamos</p>
        <p class="text-muted">Total</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="{{asset('images/pending.png')}}" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">{{$cantPendiente}} Reclamos</p>
        <p class="text-muted">Pendientes</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="{{asset('images/process.png')}}" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">{{$cantProceso}} Reclamos</p>
        <p class="text-muted">En proceso</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel-back noti-box">
      <div class="">
        <img src="{{asset('images/confirm.png')}}" class="imagen-cuadrada"/>
      </div>
      <div class="text-box" >
        <p class="main-text">{{$cantFinalizado}} Reclamos</p>
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
                    <table class="table table-striped table-bordered table-hover" id="tablaReclamos-Panel">
                        <thead>
                            <tr>
                                <th>Id Reclamo</th>
                                <th>Tipo</th>
                                <th>Fecha - Hora</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Ubicación</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($reclamos as $reclamo)
                          <tr>
                            <td>{{$reclamo->id}}</td>
                            <td>{{$reclamo->titulo}}</td>
                            <td>{{$reclamo->fecha}}</td>
                            <td>{{$reclamo->descripcion}}</td>
                            <td>{{$reclamo->estado}}</td>
                            <td><button onclick="goTo({{$reclamo->latitud}},{{$reclamo->longitud}})">Ver</button></td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Fin Tabla Reclamos -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyfTLWyCHhqEvX3AVXJprC3HsrSkJzQVM"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/controllerMapa.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/controllerTablaPanel.js') }}" type="text/javascript"></script>

@endsection
