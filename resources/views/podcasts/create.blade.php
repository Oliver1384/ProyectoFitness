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

<form action="{{route('podcasts.store')}}" method="post">
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

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Añadir podcast</button>
        </div>
    </div>

</form>

@endsection
