@extends('layouts.template')



@section('content')
    <link rel="stylesheet" href="{{asset('/css/podcastsAdmin.css')}}">
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

    <section class="barraElementos">
        <h1>Administrar podcasts</h1>
        <a type="button" id="add" href="{{route('agregarPodcast')}}" class="btn btn-primary btn-lg">Añadir</a>
        <form action="{{ url('/admin/podcasts') }}" method="get">
            <div class="form-row" style="display: flex; justify-content:flex-end; margin: .5em 4em 0 0; ">
                <div class="d-flex" style="max-width: 300px;">
                    <label>
                        <input type="text" name="texto" class="form-control">
                    </label>
                    <input type="submit" id="buscar" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
    </section>
    <div class="contenedor">
        @foreach($podcasts as $podcast)

            <div class="card mb-3" >
                <img src="{{ asset($podcast->imagen) }}" class="card-img-top" alt="imagen relacionada con el podcasts">
                    <div class="card-body">
                        <h5 class="card-title">{{ $podcast->titulo }} <span>{{ $podcast->tema }}</span></h5>
                        <audio controls preload="none">
                            <source src="{{ asset($podcast->audio) }}" type="audio/mp3"/>
                            Tu navegador no soporta el recurso de audio.
                        </audio>
                        <p class="card-text">{{($podcast->destacado === 1) ? 'Destacado' : 'No destacado'}}</p>
                        @if(isset($podcast->user))
                        <p class="card-text ">Autor:  {{ $podcast->user->email }} </p>
                        @endif
                        <div class="botonesPodcast">
                            <a class="btn btn-info btn-sm" href="{{ route('podcasts.edit', $podcast->id) }}">Editar</a>
                            <form class="inline-block" action="{{ route('podcasts.destroy', $podcast->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('¿Estás seguro de querer eliminar el podcast?')"
                                        type="submit" class="btn btn-sm btn-danger">Eliminar
                                </button>
                            </form>
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
