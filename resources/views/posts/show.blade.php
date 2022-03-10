@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/show.css')}}">
@section('content')
<a href="{{ url('/admin/posts') }}" class="btn btn-warning">volver</a>
<div class="datos">

    <div>

    </div>
</div>

<div class="card">
  <img class="card-img-top" src="{{ asset($post->imagen) }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-text">Título: {{$post->titulo}}</h5>
        <p class="card-text">Descripción: {{$post->descripcion}}</p>
        <p class="card-text">Escrito por: {{$post->user->name}}</p>
    </div>
</div>
@endsection
