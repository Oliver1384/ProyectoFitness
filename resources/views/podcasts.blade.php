@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">

    <div>
        <h1>PODCASTS</h1>
        <div>
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <h2>PODCAST 1</h2>
                <h3>TEMA PODCAST</h3>
            </div>
        </div>
        <div>
            <img src="" alt="">
            <div>
                <h2>PODCAST 1</h2>
                <h3>TEMA PODCAST</h3>
            </div>
        </div>
        <div>
            <img src="" alt="">
            <div>
                <h2>PODCAST 1</h2>
                <h3>TEMA PODCAST</h3>
            </div>
        </div>
        <div>
            <img src="" alt="">
            <div>
                <h2>PODCAST 1</h2>
                <h3>TEMA PODCAST</h3>
            </div>
        </div>
    </div>
    <div>
        <button><</button>
        <button>></button>
    </div>
@endsection
