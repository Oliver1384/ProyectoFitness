<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PlanPersonalizadoController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\InformacioncentroController;




Route::get('/',[ContenidoController::class, 'inicio'] )->name('Inicio');
Route::get('/Podcasts',[ContenidoController::class, 'podcasts'] )->name('Podcasts');

Route::get('/Posts', [ContenidoController::class, 'posts'])->name('Posts');


Route::get('/showpost/{id}', [ContenidoController::class , 'verPost'])->name('showpost');

Route::get('/Planes', [ContenidoController::class, 'planes'])->name('Planes');

Route::get('/Contacto', [ContenidoController::class, 'infoContacto'])->name('Contacto');

Route::get('/Post', function () {
    return view('post');
})->name('Post');

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin/send-email', [SendEmailController::class, 'index']);
Route::get('/solicitar', [SolicitudController::class, 'mostrarFormulario'])->name('solicitar');
Route::post('/solicitar', [SolicitudController::class, 'enviarFormulario']);
Route::post('/planes/destroy', [PlanController::class, 'eliminarPlan'])->middleware('auth');
Route::resource('/admin/planes', PlanController::class)->middleware('auth');
Route::resource('/admin/posts', PostController::class)->middleware('auth');
Route::resource('/admin/informacionCentro', InformacioncentroController::class)->middleware('auth');
Route::resource('/admin/planPersonalizado', PlanPersonalizadoController::class)->middleware('auth');
Route::resource('/admin/posts', PostController::class)->middleware('auth');
Route::get('/admin/podcasts', [PodcastController::class, 'index'])->middleware('auth');
Route::get('/admin/agregarPodcast', [PodcastController::class, 'create'])->middleware('auth')->name('agregarPodcast');
Route::resource('/admin/podcasts', PodcastController::class)->middleware('auth');
Route::resource('/admin/usuarios', UserController::class)->middleware('auth');
Auth::routes([
    'register' => false
]);

