@extends('layouts.app')

@section('title','Lista de Tipo de Reclamo')

@section('content')
  <h1 class="page-header">Listado de Tipo de Reclamo</h1>
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                   Tabla de Tipo de Reclamos
              </div>
              <div class="panel-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="tablaTipoReclamos">
                          <thead>
                              <tr>
                                  <th>Id Reclamo</th>
                                  <th>Titulo</th>
                                  <th>Imagen</th>
                                  <th>Acción</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($reclamosTipo as $reclamoTipo)
                            <tr>
                              <td>{{$reclamoTipo->id}}</td>
                              <td>{{$reclamoTipo->titulo}}</td>
                              <td>{{$reclamoTipo->imagen}}</td>
                              <td>
                                  <a href="/reclamo/{{$reclamoTipo->id}}/edit" class="btn btn-warning" data-toggle="modal">Editar</a>
                                  <form action="/reclamo/{{ $reclamoTipo->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                  </form>
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
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.dataTables.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/controllerTablaTipoReclamo.js') }}" type="text/javascript"></script>

@endsection
