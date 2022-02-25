@extends('layouts.template2')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">
    <div class="separadorBlanco"></div>
    <div class="seccionEscritorio ocultarMovil">
        <div class="podcastCategoria">
            <h2>PODCASTS <br><span>MÁS RECIENTES</span></h2>
            <div>
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                    <div>
                        <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                    </div>
                    <audio controls="controls">
                        <source src="#" type="audio/mpeg" />
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
        </div>
        <div class="podcastCategoria">
            <h2>PODCASTS <br><span>DESTACADOS</span></h2>
            <div>
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
                <div class="podcast">
                    <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
        </div>
    </div>

    <h1>NUESTROS PODCASTS</h1>
    <div id="carouselExampleControls" class="carousel slide nuestrosPodcasts ocultarMovil" data-ride="carousel">
        <div class="carousel-inner">
                <div  class="carousel-item  active">
                    <div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast ">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast ">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>

                </div>
                <div  class="carousel-item">
                    <div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast ">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast ">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="carousel-item">
                    <div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast ">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="podcast ">
                            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                            <div>
                                <div>
                                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                                </div>
                                <audio controls="controls">
                                    <source src="#" type="audio/mpeg"/>
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <div class="podcasts ocultarEscritorio">
        <h1>PODCASTS</h1>
        <div class="podcast">
                <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
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
        <button><</button>
        <button>></button>
    </div>
@endsection
