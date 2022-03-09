@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearPlan.css') }}">
@section('content')
<h1>Crear plan</h1>

<form action="{{ url('/solicitar') }}" method="post">
        @csrf
        <div class="form-group">

            <span> Título</span>
            <input type="text" name="titulo">
    
            <span> Descripción</span>
            <textarea name="descripcion" cols="30" rows="30" placeholder="Escribe aquí el contenido del plan" minlength="50" maxlength="10000"></textarea>

            <span> Imagen</span>
            <input type="file" name="imagen" class="form-control" >
    
    
    
        </div>

    </form>

@endsection