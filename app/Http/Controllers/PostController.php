<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts;
        if(isset($request->all()['texto']) && !empty(trim($request->get('texto')))){
            $texto = trim($request->get('texto'));
            $posts = DB::table('posts')->select('*')->where('titulo', 'LIKE', "%{$texto}%")->paginate(6);
        }else{
            $posts = Post::latest()->paginate(6);
        }
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idUser = auth()->user()['id'];
        $request->validate([
            'titulo' => 'required|min:3|max:50',
            'descripcion' => 'required|min:50|max:10000',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('imagen')) {
            $imageDestinationPath = 'posts/';
            $imagenPlan = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $imagenPlan);
            $input['imagen'] = "{$imageDestinationPath}{$imagenPlan}";
        }

        $input['user_id'] = $idUser; // Cambiar esto una vez implementado el login, esto deberá ser auth()->user()->id
        $input['destacado'] = $input['destacado'] === "true" ? true : false;
        Post::create($input);
        return redirect()->route('posts.index')->with('success','Post creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => 'required|min:5|max:80',
            'descripcion' => 'required|min:50|max:10000',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if (!empty($image = $request->file('imagen'))) {
            $imageDestinationPath = 'posts/';
            $imagenPost = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $imagenPost);
            $input['imagen'] = "{$imageDestinationPath}{$imagenPost}";

        } else {
            unset($input['imagen']);
        }
        $input['destacado'] = $input['destacado'] === "true" ? true : false;
        $post->update($input);

        return redirect()->route('posts.index')->with('success','Post actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post eliminado correctamente');

    }
}
