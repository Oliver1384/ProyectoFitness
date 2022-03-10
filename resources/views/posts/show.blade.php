@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/show.css')}}">
@section('content')
<a href="{{ url('/admin/posts') }}" class="btn btn-warning volver">volver</a>
<div class="datos">

    <div>

    </div>
</div>

<div class="card">
  <img class="card-img-top" src="{{ asset($post->imagen) }}" alt="Card image cap">
    <div class="card-body">
        <h3 class="card-text">{{$post->titulo}}</h3>
        <p class="card-text">{{$post->descripcion}}</p>
        <p class="card-text font-weight-bold">Post escrito por: {{$post->user->name}}</p>
    </div>
</div>
@endsection
