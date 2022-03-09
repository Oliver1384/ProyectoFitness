@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/show.css')}}">
@section('content')

<div class="datos">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset($plan->imagen) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">TITULO: {{ $plan->titulo }} </h5>
                    <p class="card-text">DESCRIPCIÓN: {{ $plan->descripcion }}</p>
                    <p class="card-text">AUTOR: "pendiente"</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection