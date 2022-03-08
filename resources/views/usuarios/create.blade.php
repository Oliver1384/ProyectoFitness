@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearUsuario.css') }}">
@section('content')
<h1>Crear usuario</h1>

<form action="{{ url('/solicitar') }}" method="post">
        @csrf
        <div class="form-group">
            <label >
                Nombre y Apellidos
                <input type="text" name="nombre" >
            </label>
            <label>
                Correo
                <input type="text" name="email" min="8" max="100">
            </label>
            <label>
                Facebook
                <input type="text" name="email" >
            </label>
            <label>
                Instagram
                <input type="text" name="email" >
            </label>
            
            <label>
                Linkedin
                <input type="text" name="email" >
            </label>
            <label>
                Imagen
                <input type="file" name="img" class="form-control" value="{{}}">
            </label>
                
            
        </div>

    </form>

@endsection