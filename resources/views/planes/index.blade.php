@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/gestionPlanes.css')}}">
@section('content')
<h1>Bienvenido a la gestión de Planes</h1>

<section class="barraElementos">
  <a type="button" id="add" href="{{route('planes.create')}}" class="btn btn-primary btn-lg">+ Añadir</a>
  <form action="{}" method="get">
    <div class="form-row" style="display: flex; justify-content:flex-end; margin: .5em 4em 0 0; ">
      <div class="d-flex" style="max-width: 300px;">
        <input type="text" name="texto" class="form-control">
        <input type="submit" id="buscar" class="btn btn-primary" value="Buscar">
      </div>
    </div>
  </form>
</section>
<div class="contenedor">

   @foreach($planes as $plan) 
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $plan->imagen }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $plan->titulo }}</h5> 
        </div>
      </div>
    </div>
  </div>
   @endforeach 
  <span class="paginador" style="display: flex; justify-content:center; margin: 1em;">
     {{ $planes->links()  }}
  </span>

</div>


@endsection