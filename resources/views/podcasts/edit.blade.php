@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearPlan.css') }}">
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
<a href="{{ url('/admin/planes') }}" class="btn btn-warning">volver</a>

<h1>Editar podcast</h1>

<form action="{{ route('podcasts.update',$podcast->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Título:
                <input type="text" name="titulo" value="{{$podcast->titulo}}">
            </label>

            <label>Tema:
                <input type="text" name="tema" value="{{$podcast->tema}}">
            </label>

            <div>
                <p>Destacado</p>
                
                <label>Si
                    <input type="radio" name="destacado" value="1" {{ ($podcast->destacado === 0) ? '' : 'checked' }}>
                </label>
                <label>No
                    <input type="radio" name="destacado" value="0" {{ ($podcast->destacado === 0) ? 'checked' : '' }}>
                </label>
            </div>


            <label>Audio mp3:
                <input type="file" name="audio" class="form-control" value="{{$podcast->audio}}">
            </label>

            <label>Imagen:
                <input type="file" name="imagen" class="form-control" value="{{$podcast->imagen}}">
            </label>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Actualizar podcast</button>
            </div>
        </div>
    </form>

@endsection
