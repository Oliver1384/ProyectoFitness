<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\User;
use Illuminate\Http\Request;

class PodcastController extends Controller {

    public function index() {
        $podcasts = Podcast::latest()->paginate(7);
        $usuarios = User::all();
        return view('podcasts.index')->with(compact('podcasts','usuarios'));
    }

    public function create() {
        return view('podcasts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'titulo' => 'required|min:3|max:100',
            'user_id' => 'required|min:1|max:1000',
            'tema' => 'required|min:10|max:80',
            'audio' => 'required|mimes:mp3|max:10048',
            'imagen' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'destacado' => 'required|min:1|max:1',
        ]);

        $input = $request->all();

        if ($image = $request->file('imagen')) {
            $imageDestinationPath = 'uploads/';
            $imagenUsuario = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $imagenUsuario);
            $input['imagen'] = "{$imageDestinationPath}{$imagenUsuario}";
        }

        if ($audio = $request->file('audio')) {
            $audioDestinationPath = 'audio/';
            $audioPodcast = date('YmdHis') . "." . $audio->getClientOriginalExtension();
            $audio->move($audioDestinationPath, $audioPodcast);
            $input['audio'] = "{$audioDestinationPath}{$audioPodcast}";
        }

        Podcast::create($input);
        return redirect()->route('podcasts.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcast $podcast)
    {
        //
    }

    public function destroy(Podcast $podcast) {
        $podcast->delete();
        return redirect()->route('podcasts.index')->with('success','El podcast ha sido eliminado con éxito');
    }
}
