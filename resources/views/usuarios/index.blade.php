@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/usuarios.css')}}">
@section('content')
<h1>Bienvenido a la gestión de Usuarios</h1>
<div class="contenedor">
    
<div class="card">
  <img src="{{asset('images/usuarios/nuevoUsuario.jpg')}}" class="card-img-top" id='planes' alt="...">
  <div class="card-body">
    <h5 class="card-title">Crear nuevo usuario</h5>
    <p class="card-text">Gestiona los usuarios que acceden a este portal.</p>
    <a href="{{url('admin/')}}" class="btn btn-warning">Ir a crear usuario</a>
  </div>
</div>

<div class="card">
  <img src="{{asset('images/usuarios/verUsuario.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Administrador de cuentas</h5>
    <p class="card-text">Ver y editar perfiles.</p>
    <a href="{{url('admin/')}}" class="btn btn-warning">Ir a administrar cuentas</a>
  </div>
</div>
</div>
@endsection