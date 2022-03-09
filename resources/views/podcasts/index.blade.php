@extends('layouts.template')



@section('content')
    <link rel="stylesheet" href="{{asset('/css/podcastsAdmin.css')}}">
    <div class="contenedor">
        @foreach($podcasts as $podcast)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <img src="{{ $podcast->imagen }}" class="card-img-top" alt="imagen relacionada con el podcasts">    
                    <div class="col-md-8">
                        <div class="card-body">

                            <h2 class="card-title">{{ $podcast->titulo }} <span>{{ $podcast->tema }}</span></h2>
                            <audio controls="controls">
                                <source src="{{ $podcast->audio }}" type="audio/mp3" />
                                Tu navegador no soporta el recurso de audio.
                            </audio>
                            <p class="card-text">Número de veces escuchado:{{$podcast->veces_escuchado}}</p>
                            <p class="card-text">{{($podcast->destacado === 1) ? 'Destacado' : 'No destacado'}}</p>

                            @foreach ($usuarios as $usuario)
                                @if($usuario->id === $podcast->user_id) 
                                    <p class="card-text">Por {{$usuario->name}}</p>
                                @endif
                            @endforeach
                            <div>
                                <a class="btn btn-sm btn-primary" href="#">Editar</a>
                                <form class="inline-block" action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('¿Estás seguro de querer eliminar el libro?')" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  
    <div class="paginadorContainer">
        <span class="paginador">
            {{$podcasts->links()}}
        </span>
    </div>
@endsection