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

<h1>Editar usuario</h1>

<form action="{{route('usuarios.update', $usuario->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">

        <span> Nombre y Apellidos</span>
        <input type="text" name="name" value="{{$usuario->name}}">

        <span> Correo</span>
        <input type="text" name="email" min="8" max="100" value="{{$usuario->email}}">

        <span> Titulación</span>
        <input type="text" name="titulacion" min="8" max="100" value="{{$usuario->titulacion}}">

        <span> Presentación</span>
        <textarea name="presentacion" id="" cols="30" rows="5" >{{$usuario->presentacion}}</textarea>

        <span> Facebook</span>
        <input type="text" name="facebook" value="{{$usuario->facebook}}">
        
        <span> Instagram</span>
        <input type="text" name="instagram" value="{{$usuario->instagram}}">
        
        <span>Linkedin</span>
        <input type="text" name="linkedin" value="{{$usuario->linkedin}}">
        
        <span> Contraseña</span>
        <input type="password" name="password" min="8" max="100" value="{{$usuario->password}}">

        <span> Repite la contraseña</span>
        <input type="password" name="password" min="8" max="100"value="{{$usuario->password}}">

        <span> Imagen</span>
        <input type="file" name="imagen" class="form-control">
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Editar usuario</button>
        </div>
        
    </div>

</form>


@endsection