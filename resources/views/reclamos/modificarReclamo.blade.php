@extends('layouts.app')

@section('title','Modificar Tipo de Reclamo')

@section('content')
  <h1 class="page-header">Modificación de Tipo de Reclamo</h1>
  <div class="container">
    <form class="form-group" method="POST" action="/reclamo/{{$reclamoTipo->id}}" enctype="multipart/form-data">
      @method('PUT');
      @csrf
      <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" name="titulo" value="{{$reclamoTipo->titulo}}" class="form-control">
      </div>
      <div class="form-group">
          <label for="imagen">Imagen</label>
          <input type="file" name="imagen">
      </div>
      <button type="submit" class="btn btn-primary">Guardar Modificacion</button>
    </form>
  </div>

@endsection
