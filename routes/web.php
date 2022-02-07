<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Tienda', function () {
    return view('shop');
});

Route::get('/Podcasts', function () {
    return view('podcasts');
});

Route::get('/Posts', function () {
    return view('posts');
});

Route::get('/Planes', function () {
    return view('plans');
});

Route::get('/Contacto', function () {
    return view('contact');
});
