@extends('layouts.template')



@section('content')
    @if ($message = Session::get('fail'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
    @endif

    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
        <p><strong>¡Vaya!</strong> Alguno de los campos no es correcto.</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                    <img src="{{ asset($podcast->imagen) }}" class="card-img-top" alt="imagen relacionada con el podcasts">
                    <div class="col-md-8">
                        <div class="card-body">

                            <h2 class="card-title">{{ $podcast->titulo }} <span>{{ $podcast->tema }}</span></h2>
                            <audio controls="controls">
                                <source src="{{ asset($podcast->audio) }}" type="audio/mp3" />
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
                                <form class="inline-block" action="{{ route('podcasts.destroy',$podcast->id) }}" method="POST">
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
