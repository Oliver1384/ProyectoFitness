<?php

use App\Http\Controllers\InformacioncentroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PlanPersonalizadoController;


Route::get('/', function () {
    return view('index');
})->name('Inicio');

/*Route::get('/Tienda', function () {
    return view('shop');
})->name('Tienda');*/

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
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::post('/planes/destroy', [PlanController::class, 'eliminarPlan'])->middleware('auth');
Route::resource('/admin/planes', PlanController::class)->middleware('auth');
Route::resource('/admin/posts', PostController::class)->middleware('auth');
Route::resource('/admin/planPersonalizado', PlanPersonalizadoController::class)->middleware('auth');
Route::get('/admin/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('/admin/podcasts', [PodcastController::class, 'index'])->middleware('auth');
Route::resource('/admin/usuarios', UserController::class)->middleware('auth');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
