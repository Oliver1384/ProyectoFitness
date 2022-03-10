@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/solicitudes.css') }}">

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif



@if(Request::isMethod('get'))
    <h1>Solicita tu plan</h1>
    <form action="{{ url('/solicitar') }}" method="post">
        @csrf
        <div class="form-group">
            <label >
                <span>Nombre y apellidos</span>
                <input type="text" name="nombre" >
            </label>
            <label>
                <span>¿Cuál es tu email?</span>
                <input type="text" name="email" min="8" max="100">
            </label>
            <label>
                <span>Elige un entrenador</span>
                <select name="" id="" class="entrenadores">
                    @foreach($entrenadores as $entrenador)
                        <option value"{{$entrenador->id}}">{{$entrenador->name}}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div class="form-group">
            <label>
                Tu objetivo a conseguir
                <textarea name="objetivo" cols="30" rows="10" placeholder="Ganar musculatura, pérdida de peso..."></textarea>
            </label>
            </label>
        </div>
        <input type="submit" value="SOLICITAR">
    </form>
@else
    <h1>Tu solicitud ha sido enviada con éxito</h1>
@endif
@endsection
