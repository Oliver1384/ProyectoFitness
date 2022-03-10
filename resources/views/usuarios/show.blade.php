@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/mostrarUsuario.css')}}">
@section('content')
<div class="contenedor">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset($usuario->imagen)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$usuario->name}}</h5>
                    <p class="card-text">{{$usuario->email}}</p>
                    <p class="card-text">{{$usuario->titulacion}}</p>
                    <p class="card-text">{{$usuario->presentacion}}</p>
                    <a href="{{$usuario->facebook}}">{{$usuario->facebook}}</a>
                    <a href="{{$usuario->instagram}}">{{$usuario->instagram}}</a>
                    <a href="{{$usuario->linkedin}}">{{$usuario->linkedin}}</a>
                </div>

                <form action="{{ route('usuarios.destroy',$usuario->id)}}" method="POST" style="margin: 0 0 0 1em;" class="botones">
                            
                            <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" style="padding: .5em 1.2em;" onclick="confirm('¿Desea eliminar éste archivo?')">Borrar</button>
                        </form>
            </div>
        </div>
    </div>
</div>


@endsection