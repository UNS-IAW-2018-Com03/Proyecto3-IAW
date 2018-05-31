@extends('layouts.app')

@section('title','Mapa de Calor')

@section('content')
<h1 class="page-header">Mapa de Calor</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div id="heatMap" class="mapa"></div>
  </div>
</div>
<!-- Fin Info -->

<!--Fin Tabla Reclamos -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyfTLWyCHhqEvX3AVXJprC3HsrSkJzQVM&libraries=visualization"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/controllerMapaCalor.js') }}" type="text/javascript"></script>

@endsection
