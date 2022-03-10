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
<h1>Crear post</h1>

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <span> Título</span>
            <input type="text" name="titulo">

            <span> Descripción</span>
            <textarea name="descripcion" cols="30" rows="20" placeholder="Escribe aquí el contenido del post" minlength="50" maxlength="10000"></textarea>

            <span> Imagen</span>
            <input type="file" name="imagen" class="form-control" >

            <span>Destacado</span>
            <select name="destacado">
                <option value="false">No</option>
                <option value="true">Si</option>
            </select>
            <input type="submit" value="Crear">
        </div>
    </form>

@endsection
