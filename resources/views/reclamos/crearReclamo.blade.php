@extends('layouts.app')

@section('title','Crear Tipo de Reclamo')

@section('content')
  <h1 class="page-header">Creación de Tipo de Reclamo</h1>
  <div class="container">
    <form class="form-group" method="POST" action="/reclamos">
      @csrf
      <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" name="titulo" value="" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
@endsection
