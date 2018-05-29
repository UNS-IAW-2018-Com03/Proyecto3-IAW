@extends('layouts.app')

@section('title','Crear Tipo de Reclamo')

@section('content')
  <h1 class="page-header">Creación de Tipo de Reclamo</h1>
  <div class="container">
    <form class="form-group" method="POST" action="/reclamo" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" name="titulo" class="form-control" maxlength="50">
      </div>
      <div class="form-group">
          <label for="imagen">Imagen</label>
          <input type="file" name="imagen">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
@endsection
