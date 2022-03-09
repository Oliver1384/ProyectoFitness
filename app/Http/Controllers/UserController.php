<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(9);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $usuario)
    {

        return view('usuarios.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:10|max:80|email:rfc',
            'facebook' => 'required|min:3|max:100',
            'instagram' => 'required|min:3|max:100',
            'linkedin' => 'required|min:3|max:100',
            'titulacion' => 'required|min:3|max:100',
            'presentacion' => 'required|min:3|max:200',
            'password' => 'required|min:5|max:80'
        ]);

        $input = $request->all();

        if ($image = $request->file('imagen')) {
            $imageDestinationPath = 'uploads/';
            $imagenUsuario = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $imagenUsuario);
            $input['imagen'] = "{$imageDestinationPath}{$imagenUsuario}";
        }

        User::create($input);
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:10|max:80|email:rfc',
            'facebook' => 'required|min:3|max:100',
            'instagram' => 'required|min:3|max:100',
            'linkedin' => 'required|min:3|max:100',
            'titulacion' => 'required|min:3|max:100',
            'presentacion' => 'required|min:3|max:200',
            'password' => 'required|min:5|max:80'
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

        $usuario->update($input);

        return redirect()->route('usuarios.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
