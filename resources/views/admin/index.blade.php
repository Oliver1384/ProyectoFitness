@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/indexAdmin.css')}}">
@section('content')
<div class="contenedor">

<div class="card">
  <img src="{{asset('images/admin/planes.jpg')}}" class="card-img-top" id='planes' alt="...">
  <div class="card-body">
    <h5 class="card-title">Planes</h5>
    <p class="card-text">Administra los planes.</p>
    <a href="{{url('admin/planes')}}" class="btn btn-warning">Ir a planes</a>
  </div>
</div>

<div class="card">
  <img src="{{asset('images/admin/posts.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Posts</h5>
    <p class="card-text">Administra los posts.</p>
    <a href="{{url('admin/posts')}}" class="btn btn-warning">Ir a posts</a>
  </div>
</div>

<div class="card">
  <img src="{{asset('images/admin/podcast.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Podcasts</h5></p>
    <p class="card-text">Administra los podcasts.</p>
    <a href="{{url('admin/podcasts')}}" class="btn btn-warning">Ir a podcast</a>
  </div>
</div>

<div class="card">
  <img src="{{asset('images/admin/contacto.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Contacto</h5>
    <p class="card-text">Edita la información de contacto.</p>
    <a href="{{url('admin/informacionCentro')}}" class="btn btn-warning">Ir a contacto</a>
  </div>
</div>

<div class="card">
  <img src="{{asset('images/admin/usuarios.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Usuarios</h5>
    <p class="card-text">Crear nuevos usuarios.</p>
    <a href="{{url('admin/usuarios')}}" class="btn btn-warning">Ir a usuarios</a>
  </div>
</div>


</div>

@endsection


