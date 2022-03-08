<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformacionController;


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

Route::get('/solicitar', [SolicitudController::class, 'mostrarFormulario'])->name('solicitar');
Route::post('/solicitar', [SolicitudController::class, 'enviarFormulario']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//Route::get('/admin/planes', [PlanController::class, 'index']);
Route::resource('/admin/planes', PlanController::class);
Route::get('/admin/posts', [PostController::class, 'index']);
Route::get('/admin/podcasts', [PodcastController::class, 'index']);
Route::get('/admin/usuarios', [UserController::class, 'index']);
Route::get('/admin/informacion', [InformacionController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
