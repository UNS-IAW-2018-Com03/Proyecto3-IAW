@extends('login.pleaseLogin')

@section('errorDialog')
<div class="alert alert-danger">
  <strong>Error!</strong>
  <p>{{$error}}</p>
</div>

@endsection
