@extends('layouts.app')

@section('title','Tabla de Reclamos')

@section('content')
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
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($reclamos as $reclamo)
                          <tr>
                            <td>{{$reclamo->id}}</td>
                            <td>{{$reclamo->titulo}}</td>
                            <td>{{$reclamo->user}}</td>
                            <td>{{$reclamo->fecha}}</td>
                            <td>{{$reclamo->estado}}</td>
                            <td>
                              @if($reclamo->estado != 'Pendiente')
                              <a href="#" class="btn btn-danger" data-toggle="modal">Pendiente</a>
                              @endif
                              @if($reclamo->estado != 'Proceso')
                              <a href="#" class="btn btn-warning" data-toggle="modal">Proceso</a>
                              @endif
                              @if($reclamo->estado != 'Finalizar')
                              <a href="#" class="btn btn-success" data-toggle="modal">Finalizar</a>
                              @endif
                            </td>
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

@endsection
