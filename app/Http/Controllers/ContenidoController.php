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

    public function verPost($id){
        dd($id);
    }

}
