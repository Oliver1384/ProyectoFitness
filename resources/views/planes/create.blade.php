@extends('layouts.template')
<link rel="stylesheet" href="{{ URL::asset('css/crearUsuario.css') }}">
@section('content')
<h1>Crear plan</h1>

<form action="{{ url('/solicitar') }}" method="post">
        @csrf
        <div class="form-group">
            <label >
                titulo
                <input type="text" name="nombre" >
            </label>
            <label>
                descripcion
                <input type="text" name="email" min="8" max="100">
            </label>
            <label>
                imagen
                <input type="text" name="email" >
            </label>
            
        </div>

    </form>

@endsection