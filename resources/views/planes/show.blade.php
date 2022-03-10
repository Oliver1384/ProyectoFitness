@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/show.css')}}">
@section('content')
<a href="{{ url('/admin/planes') }}" class="btn btn-warning">volver</a>
<div class="datos">

    <div>

    </div>
</div>

<div class="card">
  <img class="card-img-top" src="{{ asset($plan->imagen) }}" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">{{$plan->descripcion}}</p>
    </div>
</div>
@endsection
