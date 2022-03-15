<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\User;
use App\Models\Podcast;
use App\Models\Post;
use App\Models\Informacioncentro;



class ContenidoController extends Controller{

    public function inicio(){
        $entrenadores = User::where('name', 'not like', '%admin%')->get();
        $centro = Informacioncentro::find(1);
        $podcasts = Podcast::latest()->take(4)->get();
        $destacado = Post::where(['destacado' => true])->latest()->take(1)->get()->first();

        return view('index', compact('podcasts', 'destacado', 'entrenadores','centro'));
    }

    public function infoContacto(){
        $informacion = Informacioncentro::find(1);
        return view('contact', compact('informacion'));
    }


    public function planes(){
        $planes = Plan::all();
        $centro = Informacioncentro::find(1);
        return view('plans', compact('planes','centro'));
    }


    public function posts(){
        $destacado = Post::where(['destacado' => true])->latest()->take(1)->get()->first();
        $posts = Post::latest()->paginate(6);
        $centro = Informacioncentro::find(1);
        return view('posts', compact('destacado', 'posts','centro'));


    }

    public function verPost($id){
        $post = Post::find($id);
        $centro = Informacioncentro::find(1);
        return view('post', compact('post','centro'));
    }

    public function podcasts(){
        $podcasts = Podcast::latest()->get();
        $centro = Informacioncentro::find(1);
        $podcastsDestacados = Podcast::latest()->where('destacado', true)->get();
        return view('podcasts', compact('podcasts','podcastsDestacados','centro'));
    }
}
