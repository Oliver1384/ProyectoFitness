@extends('layouts.template')


@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/usuarios.css')}}">
@section('content')
<h1>Bienvenido a la gestión de Planes</h1>
<div class="contenedor">
    
<div class="card">
  <img src="{{asset('images/usuarios/nuevoUsuario.jpg')}}" class="card-img-top" id='planes' alt="...">
  <div class="card-body">
    <h5 class="card-title">Crear nuevo plan</h5>
    <p class="card-text">Crea un nuevo plan para los usuarios</p>
    <a href="{{route('planes.create')}}" class="btn btn-warning">Crear plan</a>
  </div>
</div>

<div class="card">
  <img src="{{asset('images/usuarios/verUsuario.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Administrador de planes</h5>
    <p class="card-text">Ver y editar planes.</p>
    <a href="{{url('admin/')}}" class="btn btn-warning">Administrar planes</a>
  </div>
</div>
</div>
@endsection
