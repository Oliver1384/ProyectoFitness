@extends('layouts.template')
<link rel="stylesheet" href="{{asset('/css/gestionPlanes.css')}}">
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
        <img src="{{ asset($plan->imagen) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $plan->titulo }}</h5>
          <div class="controls">
              <form action="{{route('planes.show', $plan->id)}}" method="get">
                  @csrf
                  <input type="hidden" name="id" value="{{$plan->id}}" class="btn btn-sm btn-info">
                  <input type="submit" value="ver" class="btn btn-warning">
              </form>
              <form action="{{route('planes.edit', $plan->id)}}" method="get">
                  @csrf
                  <input type="hidden" name="id" value="{{$plan->id}}" class="btn btn-sm btn-info">
                  <input type="submit" value="editar" class="btn btn-info">
              </form>

            <form action="{{ url('/planes/destroy')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$plan->id}}" class="btn btn-sm btn-info">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea eliminar el plan?')">Eliminar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   @endforeach
   
  </div>
  <div class="paginadorContainer">
    <span class="paginador" style="display: flex; justify-content:center; margin: 1em;">
        {{ $planes->links() }}
    </span>
  </div>


@endsection
