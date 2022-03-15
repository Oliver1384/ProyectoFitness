@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearUsuario.css') }}">
@section('content')
<h1>Agregar podcast</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('podcasts.store',['user_id'=>21])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group agregarPostForm">
        <label>Título:
            <br><input type="text" name="titulo" value="{{old('titulo')}}">
        </label>

        <label>Tema:
            <br><input type="text" name="tema" value="{{old('tema')}}">
        </label>

        <div class="destacado">
            <p>Destacado:</p>
            <label style="margin-left: 0.5rem">Si
                <input type="radio" name="destacado" value="1" {{ (old('destacado') == 1 ? 'checked' : '') }} >
            </label>
            <label>No
                <input type="radio" name="destacado" value="0" {{ (old('destacado') == 0 ? 'checked' : '') }} >
            </label>
        </div>


        <label>Audio mp3:
            <input type="file" name="audio" class="form-control" value="{{ old('audio') }}">
        </label>

        <label>Imagen:
            <input type="file" name="imagen" class="form-control" value="{{ old('imagen') }}">
        </label>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Añadir podcast</button>
        </div>
    </div>

</form>

@endsection
