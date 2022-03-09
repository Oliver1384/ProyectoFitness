@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearUsuario.css') }}">

@section('content')
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

<h1>Crear usuario</h1>

<form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

        <span> Nombre y Apellidos</span>
        <input type="text" name="name">

        <span> Correo</span>
        <input type="text" name="email" min="8" max="100">

        <span> Titulación</span>
        <input type="text" name="titulacion" min="8" max="100">

        <span> Presentación</span>
        <textarea name="presentacion" id="" cols="30" rows="5"></textarea>

        <span> Facebook</span>
        <input type="text" name="facebook">
        
        <span> Instagram</span>
        <input type="text" name="instagram">
        
        <span>Linkedin</span>
        <input type="text" name="linkedin">
        
        <span> Contraseña</span>
        <input type="password" name="password" min="8" max="100">

        <span> Repite la contraseña</span>
        <input type="password" name="password" min="8" max="100">

        <span> Imagen</span>
        <input type="file" name="imagen" class="form-control" >
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Añadir usuario</button>
        </div>
        
    </div>

</form>


@endsection