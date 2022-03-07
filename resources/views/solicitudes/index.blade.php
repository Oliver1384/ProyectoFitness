@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/solicitudes.css') }}">
    <form action="{{ url('solicitar') }}" method="post">
        <label>
            Dinos tu nombre
            <input type="text" name="nombre" >
        </label>
        <label>
            ¿Cuántos años tienes?
            <input type="number" name="edad" min="16" max="80">
        </label>
        <label>
            ¿Cuánto mides?
            <input type="number" name="altura" min="1" step="0.01" max="2,3">
        </label>
        <label>
            Peso actual
            <input type="number" name="peso" min="40" step="0.01" max="150">
        </label>
        <label>
            ¿Cuál es tu email?
            <input type="text" name="email" min="8" max="100">
        </label>
        <label>
            Cuéntanos tus hábitos alimenticios
            <textarea name="habitos_alimenticios" cols="30" rows="10"></textarea>
        </label>
        <label>
            Háblanos sobre tu rutina de ejercicios
            <textarea name="habitos_deporte" cols="30" rows="10"></textarea>
        </label>
        <label>
            Tu objetivo a conseguir con nuestro plan
            <textarea name="objetivo" cols="30" rows="10" placeholder="Ganar musculatura, pérdida de peso..."></textarea>
        </label>
        
    
    
    </form>
@endsection
