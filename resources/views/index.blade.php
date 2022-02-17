@extends('layouts.template2')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">
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
    <h2>PODCAST <br><span>MÁS RECIENTE</span></h2>
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
@endsection
