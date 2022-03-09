@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/usuarios.css')}}">
@section('content')
<h1>Bienvenido a la gestión de Usuarios</h1>

<section class="barraElementos">
  <a type="button" id="add" href="{{route('usuarios.create')}}" class="btn btn-primary btn-lg">+ Añadir</a>
  <form action="{}" method="get">
    <div class="form-row" style="display: flex; justify-content:flex-end; margin: .5em 4em 0 0; ">
      <div class="d-flex" style="max-width: 300px;">
        <input type="text" name="texto" class="form-control">
        <input type="submit" id="buscar" class="btn btn-primary" value="Buscar">
      </div>
    </div>
  </form>
</section>
<div class="contenedor">

  @foreach($usuarios as $usuario)
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$usuario->imagen}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$usuario->name}}</h5>
          <p class="card-text">{{$usuario->email}}</p>
          <p class="card-text">{{$usuario->titulacion}}</p>
          <p class="card-text">{{$usuario->presentacion}}</p>
          <a href="{{$usuario->facebook}}">{{$usuario->facebook}}</a>
          <a href="{{$usuario->instagram}}">{{$usuario->instagram}}</a>
          <a href="{{$usuario->linkedin}}">{{$usuario->linkedin}}</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  
</div>

<span class="paginador" style="display: flex; justify-content:center; margin: 1em;">
  {{$usuarios->links()}}
</span>

@endsection