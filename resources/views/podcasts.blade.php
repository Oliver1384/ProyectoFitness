@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">
    <div class="separadorBlanco"></div>
    <div class="seccionEscritorio ocultarMovil">
        <div class="podcastCategoria">
            <h2>PODCASTS <br><span>MÁS RECIENTES</span></h2>
            <div>
                @if(count($podcasts) >= 3)
                    @for($i = 0; $i < 3; $i++)
                        <div class="card podcast">
                            <img src="{{ asset($podcasts[$i]->imagen) }}" alt="imagen relacionada con la temática del podcast">
                            <div>
                                <h2>{{ $podcasts[$i]->titulo }} <br><span>{{ $podcasts[$i]->tema }}</span></h2>
                            </div>
                            <audio controls preload="none">
                                <source src="{{ asset($podcasts[$i]->audio) }}" type="audio/mp3"/>
                                Tu navegador no soporta el recurso de audio.
                            </audio>
                        </div>
                    @endfor
                @else
                    @foreach($podcasts as $podcast)
                        <div class="card podcast">
                            <img src="{{ asset($podcast->imagen) }}" alt="imagen relacionada con la temática del podcast">
                            <div>
                                <h2>{{ $podcast->titulo }} <br><span>{{ $podcast[$i]->tema }}</span></h2>
                            </div>
                            <audio controls preload="none">
                                <source src="{{ asset($podcast->audio) }}" type="audio/mp3"/>
                                Tu navegador no soporta el recurso de audio.
                            </audio>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="podcastCategoria">
            <h2>PODCASTS <br><span>DESTACADOS</span></h2>
            <div>
                @if(count($podcastsDestacados) >= 3)
                    @for($i = 0; $i < 3; $i++)
                        <div class="card podcast">
                            <img src="{{ asset($podcastsDestacados[$i]->imagen) }}" alt="imagen relacionada con la temática del podcast">
                            <div>
                                <h2>{{ $podcastsDestacados[$i]->titulo }} <br><span>{{ $podcastsDestacados[$i]->tema }}</span></h2>
                            </div>
                            <audio controls preload="none">
                                <source src="{{ asset($podcastsDestacados[$i]->audio) }}" type="audio/mp3"/>
                                Tu navegador no soporta el recurso de audio.
                            </audio>
                        </div>
                    @endfor
                @else
                    @foreach($podcastsDestacados as $podcast)
                        <div class="card podcast">
                            <img src="{{ asset($podcast->imagen) }}" alt="imagen relacionada con la temática del podcast">
                            <div>
                                <h2>{{ $podcast->titulo }} <br><span>{{ $podcast->tema }}</span></h2>
                            </div>
                            <audio controls preload="none">
                                <source src="{{ asset($podcast->audio) }}" type="audio/mp3"/>
                                Tu navegador no soporta el recurso de audio.
                            </audio>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="carouselExampleControls carousel carousel-4 nuestrosPodcasts ocultarMovil" data-ride="carousel">
        <h1>NUESTROS PODCASTS</h1>
        <div class="position-relative w-100 h-100">
            <div class="carousel-inner">
                @for($i = 0; $i < count($podcasts); $i++)
                    @if($i === 0)
                        <div class="carousel-item active">
                    @else
                        <div class="carousel-item ">
                    @endif
                        <div>
                            <div class="card podcast">
                                <img src="{{ asset($podcasts[$i]->imagen) }}" alt="imagen relacionada con la temática del podcast">
                                <div>
                                    <div>
                                        <h2>{{ $podcasts[$i]->titulo }} <br><span>{{ $podcasts[$i]->tema }}</span></h2>
                                    </div>
                                    <audio controls preload="none">
                                        <source src="{{ asset($podcasts[$i]->audio) }}" type="audio/mp3"/>
                                        Tu navegador no soporta el recurso de audio.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor


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


    <div class="podcasts ocultarEscritorio">
        <h1>PODCASTS</h1>
        <div class="card podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="imagen relacionada con la temática del podcast">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="card podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="imagen relacionada con la temática del podcast">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="card podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="imagen relacionada con la temática del podcast">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="card podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="imagen relacionada con la temática del podcast">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </div>
    <div class="controls ocultarEscritorio">
        <button>
            <
        </button>

        <button>
            >
        </button>
    </div>
@endsection
