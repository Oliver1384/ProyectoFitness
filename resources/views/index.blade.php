@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/posts.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

    <div class="col-12">
        <div id="main-article" class="text-main-white bg-main-orange">
            <div class="article-effect" style="background:url('{{ asset($destacado->imagen) }}');"></div>
            <div class="article-content">
                <h1 class="article-title">
                    <span class="text-black">{{ $destacado->titulo }}</span>
                </h1>
                <a href="{{ route('showpost', $destacado->id) }}">
                    <div class="article-button">
                        <button class="btn btn-light">Leer más</button>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="podcastCategoria podcast-index">
        <h2>PODCAST <br><span>MÁS RECIENTES</span></h2>
        <div class=" podcastIndex">
            <div>
                @foreach($podcasts as $podcast)
                    <div class="podcast ">
                        <figure>
                            <img src="{{ asset($podcast->imagen) }}" alt="">
                        </figure>
                        <div>
                            <div>
                                <h2>{{ $podcast->titulo }} <br><span>{{ $podcast->tema }}</span></h2>
                            </div>
                            <audio controls preload="none">
                                <source src="{{ asset($podcast->audio) }}" type="audio/mp3"/>
                                Tu navegador no soporta el recurso de audio.
                            </audio>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <a href="{{url('/Planes')}}">
    <div class="planes">
            <h2>PLANES<span> PERSONALIZADOS</span></h2>
        </div>
    </a>
    
    <div class="entrenadores">
        <div id="carouselExampleIndicators" class="carousel carousel-7 slide" data-ride="carousel">
            <h3>Nuestros entrenadores</h3>
            <div class="carousel-inner">
                @foreach ($entrenadores as $entrenador)
        
                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset($entrenador->imagen) }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">{{ $entrenador->name }}</p>
                                <p class="grado">{{ $entrenador->titulacion }}</p>
                                <div class="redes">
                                    <a href="{{ $entrenador->instagram }}" target="_blank">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="{{ $entrenador->facebook }}" target="_blank">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="{{ $entrenador->linkedin }}" target="_blank">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                @endforeach

<!--

                <div class="carousel-item active">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="Imagen de perfil del entrenador">
                            </figure>
                            <div class="datos-entrenador">
                                <p class="entrenador-nombre">Luis Morote</p>
                                <p class="grado">Experto en dietética</p>
                                <div class="redes">
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_instagram.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_facebook.svg') }}" alt="Instagram" />
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('images/iconos/trainer_linkedin.svg') }}" alt="Instagram" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>-->
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
