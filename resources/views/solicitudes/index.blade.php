@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/solicitudes.css') }}">
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
                <select name="entrenador" class="entrenadores">
                    @foreach($entrenadores as $entrenador)
                        <option value="{{$entrenador->id}}">{{$entrenador->name}}</option>
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
@endsection
