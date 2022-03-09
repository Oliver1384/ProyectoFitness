@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearUsuario.css') }}">
@section('content')
<h1>Agregar podcast</h1>

<form action="{{ url('') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Título:
            <input type="text" name="titulo">
        </label>

        <label>Tema:
            <input type="text" name="tema">
        </label>

        <div>
            <p>Destacado</p>
            <label>Si
                <input type="radio" name="destacado" value="si">
            </label>
            <label>No
                <input type="radio" name="destacado" value="no">
            </label>
        </div>


        <label>Audio mp3:
            <input type="file" name="audio" class="form-control" value="">
        </label>

        <label>Imagen:
            <input type="file" name="imagen" class="form-control" value="">
        </label>
    </div>

</form>

@endsection
