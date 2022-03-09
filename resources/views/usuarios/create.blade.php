@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearUsuario.css') }}">
@section('content')
<h1>Crear usuario</h1>

<form action="{{ url('/solicitar') }}" method="post">
    @csrf
    <div class="form-group">

        <span> Nombre y Apellidos</span>
        <input type="text" name="nombre">

        <span> Correo</span>
        <input type="text" name="email" min="8" max="100">

        

        <span> Facebook</span>
        <input type="text" name="email">

        <span> Instagram</span>
        <input type="text" name="email">

        <span>Linkedin</span>
        <input type="text" name="email">

        <span> Imagen</span>
        <input type="file" name="img" class="form-control" value="{{}}">



    </div>

</form>

@endsection