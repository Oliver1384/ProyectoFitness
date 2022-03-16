@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/plans.css') }}">
    <div class="container-fluid mt-4 planContenido1">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3 titulo">
                <span class="span1Contenido1">Elige </span>
                <span class="span2Contenido1">tu plan </span>
            </h1>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <p class="fst-italic pContenido1 ">
                    Solicita a nuestros entrenadores un plan hecho a tu medida. <br>
                    Rellena el formulario y selecciona al entrenador que deseas que cree tu plan.
                     <br>Pronto recibirás un correo con el plan personalizado creado por el entrenador seleccionado.
                 </p>
            </div>
            <div class="col-12 text-center">
                <a href="{{ url('solicitar') }}" class="btn btn-light mb-3 ">Crea tu plan</a>
            </div>
        </div>
    </div>
    @foreach($planes as $plan)
    <!-- AQUI EMPIEZA LA HOJA DEL PLAN -->
    <div class="modal fade visualizer" id="plan{{ $plan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title card-title text-center" id="exampleModalLabel">{{ $plan->titulo }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-8 col-md-7 col-sm-12 col-12 mb-3 ">
                            <img class="card-img-top border border-secondary"
                                src="{{ asset($plan->imagen) }}"
                                alt="Imagen representativa del programa">
                        </div>
                        <div class="col-xl-4 col-md-5  col-sm-12 col-12">
                            <div class="profile border border-secondary rounded">
                                <div class="profile_info">
                                    <p class="profile_name">
                                        {{ $plan->user->name }}
                                    </p>
                                    <div class="profile_avatar">
                                        <img src="{{ $plan->user->imagen }}"
                                             alt="Imagen de perfil del entrenador">
                                    </div>
                                    <p class="profile_description">
                                        {{ $plan->user->titulacion }}
                                    </p>
                                </div>
                                <div class="profile_social_media">
                                    <a href="{{ $plan->user->instagram }}" target="_blank">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="{{ $plan->user->facebook }}" target="_blank">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="{{ $plan->user->linkedin }}" target="_blank">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="card-text fst-italic p-3">
                                {{ $plan->descripcion }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- termina el plan-->
    <div class="container-fluid planContenido2">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold fs-1 mt-3 titulo"> <span class="span1Contenido2">Nuestros </span> <span
                    class="span2Contenido2">planes </span> </h1>


            <div id="multi-item-example" class="carousel carousel-3" data-bs-interval="false" data-interval="false"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($planes as $plan)
                    <div class="carousel-item">
                        <div class="card plan mr-1 border border-dark">
                            <img class="card-img-top" src="{{ asset($plan->imagen) }}" alt="Imagen representativa del programa">
                            <div class="card-body ">
                                <h1 class="card-title text-center">{{ $plan->titulo }}</h1>
                                <button onclick="" class="btn btn-dark  mb-3 float-end" data-bs-toggle="modal"
                                    data-bs-target="#plan{{ $plan->id }}" data-bs-whatever="@mdo">Leer más</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
