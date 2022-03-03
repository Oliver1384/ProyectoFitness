@extends('layouts.template')

@section('content')
    <link href="{{ asset('css/posts.css') }}" rel="stylesheet"/>
    <div id="articles-page">
        <div class="row">
            <div class="col-12">
                <div id="main-article" class="text-main-white bg-main-orange">
                    <div class="article-effect" style="background:url('images/articles/Article_Main.png');"></div>
                    <div class="article-content">
                        <h1 class="article-title">
                            <span class="text-black">Artículo</span> <span class="text-white">principal</span>
                        </h1>
                        <a href="{{ url('Post') }}">
                            <div class="article-button">
                                <button class="btn btn-light">Leer más</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 article">
                <div class="text-main-white bg-main-black">
                    <div class="article-effect" style="background:url('images/articles/Article_01.png');"></div>
                    <div class="article-content">
                        <h1 class="article-title">
                            <span>Artículo 1</span>
                        </h1>
                        <div class="article-button">
                            <button class="btn btn-light">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 article">
                <div class="text-main-white bg-main-white">
                    <div class="article-effect" style="background:url('images/articles/Article_02.png');"></div>
                    <div class="article-content">
                        <h1 class="article-title">
                            <span>Artículo 2</span>
                        </h1>
                        <div class="article-button">
                            <button class="btn btn-light">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 article">
                <div class="text-main-white bg-main-white">
                    <div class="article-effect" style="background:url('images/articles/Article_03.png');"></div>
                    <div class="article-content">
                        <h1 class="article-title">
                            <span>Artículo 3</span>
                        </h1>
                        <div class="article-button">
                            <button class="btn btn-light">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 article">
                <div class="text-main-white bg-main-black">
                    <div class="article-effect" style="background:url('images/articles/Article_04.png');"></div>
                    <div class="article-content">
                        <h1 class="article-title">
                            <span>Artículo 4</span>
                        </h1>
                        <div class="article-button">
                            <button class="btn btn-light">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 article">
                <div class="text-main-white bg-main-black">
                    <div class="article-effect" style="background:url('images/articles/Article_05.png');"></div>
                    <div class="article-content">
                        <h1 class="article-title">
                            <span>Artículo 5</span>
                        </h1>
                        <div class="article-button">
                            <button class="btn btn-light">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 article">
                <div class="text-main-white bg-main-white">
                    <div class="article-effect" style="background:url('images/articles/Article_06.png');"></div>
                    <div class="article-content">
                        <h1 class="article-title">
                            <span>Artículo 6</span>
                        </h1>
                        <div class="article-button">
                            <button class="btn btn-light">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="paginator" class="ocultarMovil">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link active" href="#">«</a></li>
                    <li class="page-item"><a class="page-link active" href="#"><</a></li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link active" href="#">></a></li>
                    <li class="page-item"><a class="page-link active" href="#">»</a></li>
                </ul>
            </nav>
        </div>
        <div class="controls ocultarEscritorio">
            <button>
                &lt;
            </button>
            
            <button>
                &gt;
            </button>
        </div>
    </div>
    @endsection
