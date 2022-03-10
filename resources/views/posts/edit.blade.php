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
<a href="{{ url('/admin/posts') }}" class="btn btn-warning volver">volver</a>

<h1>Editar plan</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <span> Título</span>
            <input type="text" name="titulo" value="{{$post->titulo}}">
            <span> Descripción</span>
            <textarea name="descripcion" cols="30" rows="20" placeholder="Escribe aquí el contenido del post" minlength="50" maxlength="10000" >{{$post->descripcion}}</textarea>
            <span> Imagen</span>
            <input type="file" name="imagen" class="form-control" value="{{$post->imagen}}" >
            <input type="hidden" name="id" value="{{$post->id}}">
            <input type="submit" value="Actualizar">
        </div>
    </form>

@endsection
