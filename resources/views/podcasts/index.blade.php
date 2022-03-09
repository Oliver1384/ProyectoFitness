@extends('layouts.template')



@section('content')
    <link rel="stylesheet" href="{{asset('/css/podcastsAdmin.css')}}">
    <section class="barraElementos">
        <a type="button" id="add" href="{{route('agregarPodcast')}}" class="btn btn-primary btn-lg">+ Añadir</a>
        <form action="#" method="get">
            <div class="form-row" style="display: flex; justify-content:flex-end; margin: .5em 4em 0 0; ">
                <div class="d-flex" style="max-width: 300px;">
                    <input type="text" name="texto" class="form-control">
                    <input type="submit" id="buscar" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
    </section>
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
