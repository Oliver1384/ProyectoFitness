<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PodcastController extends Controller {

    public function index(Request $request) {
    
        $podcasts;
        if(isset($request->all()['texto']) && !empty(trim($request->get('texto')))){
            $texto = trim($request->get('texto'));
            $podcasts = Podcast::where('titulo', 'LIKE', "%{$texto}%")->paginate(6);
        }else{
            $podcasts = Podcast::latest()->paginate(6);
    
        }
        return view('podcasts.index')->with(compact('podcasts'));
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


    public function edit($id) {
        $podcast = Podcast::find($id);
        return view('podcasts.edit', compact('podcast'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'titulo' => 'required|min:3|max:100',
            'tema' => 'required|min:10|max:80',
            'audio' => 'nullable|mimes:mp3|max:10048',
            'imagen' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'destacado' => 'required|min:1|max:1',
        ]);
        $input = $request->all();
        if (!empty($image = $request->file('imagen'))) {
            $imageDestinationPath = 'uploads/';
            $imagenUsuario = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $imagenUsuario);
            $input['imagen'] = "{$imageDestinationPath}{$imagenUsuario}";
        } else {
            unset($input['imagen']);
        }
        if (!empty($audio = $request->file('audio'))) {
            $audioDestinationPath = 'audio/';
            $audioPodcast = date('YmdHis') . "." . $audio->getClientOriginalExtension();
            $audio->move($audioDestinationPath, $audioPodcast);
            $input['audio'] = "{$audioDestinationPath}{$audioPodcast}";
        } else {
            unset($input['audio']);
        }
        $podcast = Podcast::find($id);
        $podcast->update($input);

        return redirect()->route('podcasts.index')->with('success','Podcast actualizado correctamente');
    }

    public function destroy(Podcast $podcast) {
        $podcast->delete();
        return redirect()->route('podcasts.index')->with('success','El podcast ha sido eliminado con éxito');
    }
}
