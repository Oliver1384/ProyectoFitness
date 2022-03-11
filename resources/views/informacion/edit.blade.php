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
            <textarea name="descripcion" cols="30" rows="8"  minlength="50" maxlength="10000">{{$informacion->descripcion}}</textarea>

            <span> Teléfono</span>
            <input type="text" name="telefono" value="{{$informacion->telefono}}">

            <span> Correo</span>
            <input type="text" name="correo" value="{{$informacion->correo}}">
    
            <span> Dirección</span>
            <input type="text" name="direccion" value="{{$informacion->direccion}}" >

            <span> Facebook</span>
            <input type="text" name="facebook" value="{{$informacion->facebook}}">

            <span> Instagram</span>
            <input type="text" name="instagram" value="{{$informacion->instagram}}">

            <span> Youtube</span>
            <input type="text" name="youtube" value="{{$informacion->youtube}}">

            <section>
                <input class="boton" type="submit" value="Añadir cambios">
            </section>
    
      
    </form>
</div>

@endsection