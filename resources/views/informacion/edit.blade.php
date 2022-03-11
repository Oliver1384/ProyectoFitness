@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/editarInformacion.css')}}">
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

<div class="contenedor">
    <form action="{{ route('informacionCentro.update', $informacion->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <h5>Datos del centro</h5>

        <span> Descripcion</span>
        <textarea name="descripcion" cols="30" rows="5" minlength="50" maxlength="10000">{{$informacion->descripcion}}</textarea>
        <div class="contacto">
            <label> Teléfono
                <input type="text" name="telefono" value="{{$informacion->telefono}}">
            </label>
            <label> Correo
                <input type="text" name="correo" value="{{$informacion->correo}}">
            </label>
            <label> Dirección
                <input type="text" name="direccion" value="{{$informacion->direccion}}">
            </label>
            <label> Facebook
                <input type="text" name="facebook" value="{{$informacion->facebook}}">
            </label>
            <label> Instagram
                <input type="text" name="instagram" value="{{$informacion->instagram}}">
            </label>
            <label> Youtube
                <input type="text" name="youtube" value="{{$informacion->youtube}}">
            </label>
            <section>
                <input class="boton" type="submit" value="Actualizar">
            </section>
        </div>

    </form>
</div>

@endsection