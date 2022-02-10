@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">

    <div>
        <h1>PODCASTS</h1>
        <div class="podcast">
            <div>
                <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                <div>
                    <div>
                        <h2>PODCAST 1</h2>
                        <h3>TEMA PODCAST</h3>
                    </div>
                    <audio controls="controls">
                        <source src="#" type="audio/mpeg" />
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
        <div class="podcast">
            <div>
                <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                <div>
                    <div>
                        <h2>PODCAST 2</h2>
                        <h3>TEMA PODCAST</h3>
                    </div>
                    <audio controls="controls">
                        <source src="#" type="audio/mpeg" />
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
        <div class="podcast">
            <div>
                <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                <div>
                    <div>
                        <h2>PODCAST 3</h2>
                        <h3>TEMA PODCAST</h3>
                    </div>
                    <audio controls="controls">
                        <source src="#" type="audio/mpeg" />
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
        <div class="podcast">
            <div>
                <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                <div>
                    <div>
                        <h2>PODCAST 4</h2>
                        <h3>TEMA PODCAST</h3>
                    </div>
                    <audio controls="controls">
                        <source src="#" type="audio/mpeg" />
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </div>
    <div class="controls">
        <button><</button>
        <button>></button>
    </div>
@endsection
