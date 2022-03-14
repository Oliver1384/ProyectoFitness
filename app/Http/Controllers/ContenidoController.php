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
        $podcasts = Podcast::latest()->take(4)->get();

        return view('index', compact('podcasts'));
    }

    public function infoContacto(){
        $informacion = Informacioncentro::find(1);

        return view('contact', compact('informacion'));
    }


    public function posts(){
        $destacado = Post::where(['destacado' => true])->latest()->take(1)->get()->first();
        $posts = Post::latest()->paginate(6);
        return view('posts', compact('destacado', 'posts'));


    }

    public function verPost($id){
        $post = Post::find($id);
        return view('post', compact('post'));
    }

    public function podcasts(){
        $podcasts = Podcast::latest()->get();
        $podcastsDestacados = Podcast::latest()->where('destacado', true)->get();
        return view('podcasts', compact('podcasts','podcastsDestacados'));
    }
}
