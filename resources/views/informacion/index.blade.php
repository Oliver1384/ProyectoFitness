@extends('layouts.template')

@section('content')

<div class="contenedor">
<form action="{{ route('planes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <span> Teléfono</span>
            <input type="text" name="telefono">
    
            <span> Dirección</span>
            <textarea name="dirección" cols="30" rows="20" placeholder="Escribe aquí el contenido del plan" minlength="50" maxlength="10000"></textarea>

            <span> Correo</span>
            <input type="file" name="correo" class="form-control" >
    
            <input type="submit" value="Crear">
        </div>
    </form>
</div>

@ensection

