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
})->name('Inicio');

Route::get('/Tienda', function () {
    return view('shop');
})->name('Tienda');

Route::get('/Podcasts', function () {
    return view('podcasts');
})->name('Podcasts');

Route::get('/Posts', function () {
    return view('posts');
})->name('Posts');

Route::get('/Planes', function () {
    return view('plans');
})->name('Planes');

Route::get('/Contacto', function () {
    return view('contact');
})->name('Contacto');

Route::get('/Post', function () {
    return view('post');
})->name('Post');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


