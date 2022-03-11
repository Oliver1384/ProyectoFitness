@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/mostrarInformacion.css')}}">
@section('content')

<div class="contenedor">
    <div class="card mb-3">

        <div class="card-header">
            Información del centro
        </div>
            <div class="card-body">
                <h5 class="card-title"><span>Nombre:</span> {{$informacion->nombre}}</h5>
                <p class="card-text"><span>Teléfono:</span> {{$informacion->telefono}}</p>
                <p class="card-text"><span>Dirección:</span> {{$informacion->correo}}</p>
                <p class="card-text"><span>Descripción: </span>{{$informacion->descripcion}}</p>
                <section class="redes">
                    <a href="{{$informacion->facebook}}">{{$informacion->facebook}}</a>
                    <a href="{{$informacion->instagram}}">{{$informacion->instagram}}</a>
                    <a href="{{$informacion->youtube}}">{{$informacion->youtube}}</a>
                </section>
                <section class="boton">
                    <a href="{{route('informacionCentro.edit', $informacion->id)}}" class="btn btn-info">Editar</a>
                </section>
            </div>


        </div>
    </div>
</div>

@endsection