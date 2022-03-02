@extends('layouts.template2')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/posts.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

    <div class="col-12">
        <div id="main-article" class="text-main-white bg-main-orange">
            <div class="article-effect" style="background:url('images/articles/Article_Main.png');"></div>
            <div class="article-content">
                <h1 class="article-title">
                    <span class="text-black">Artículo</span> <span class="text-white">principal</span>
                </h1>
                <div class="article-button">
                    <button class="btn btn-light">Leer más</button>
                </div>
            </div>
        </div>
    </div>

    <div class="podcastCategoria podcast-index">
        <h2>PODCAST <br><span>MÁS RECIENTES</span></h2>
        <div class=" podcastIndex">
            <div>
                <div class="podcast ">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                    <div>
                        <div>
                            <h2>PODCAST 1 <br><span>TEMA PODCAST</span></h2>
                        </div>
                        <audio controls="controls">
                            <source src="#" type="audio/mpeg" />
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                    <div>
                        <div>
                            <h2>PODCAST 1 <br><span>TEMA PODCAST</span></h2>
                        </div>
                        <audio controls="controls">
                            <source src="#" type="audio/mpeg" />
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                    <div>
                        <div>
                            <h2>PODCAST 1 <br><span>TEMA PODCAST</span></h2>
                        </div>
                        <audio controls="controls">
                            <source src="#" type="audio/mpeg" />
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                    <div>
                        <div>
                            <h2>PODCAST 1 <br><span>TEMA PODCAST</span></h2>
                        </div>
                        <audio controls="controls">
                            <source src="#" type="audio/mpeg" />
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="planes">
        <h2>PLANES<span> PERSONALIZADOS</span></h2>
    </div>
    <div class="productos">
        <h2>PRODUCTOS<span> ESTRELLA</span></h2>
    </div>
    <div class="entrenadores">
        <div id="carouselExampleIndicators" class="carousel carousel-7 slide" data-ride="carousel">
            <h3>Nuestros entrenadores</h3>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="entrenador">
                        <article>
                            <figure>
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
                                <img src="{{ asset('images/provisional-desarrollo/avatar.png') }}" alt="">
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
