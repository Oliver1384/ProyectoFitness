<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacioncentro;

class InformacioncentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('informacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Informacioncentro $informacioncentro)
    {
        return view('informacion.index', compact('informacioncentro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informacioncentro $informacioncentro)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:100',
            'direccion' => 'min:3|max:100',
            'telefono' => 'min:6|max:50',
            'correo' => 'required|min:10|max:80|email:rfc',
            'facebook' => 'min:3|max:100',
            'instagram' => 'min:3|max:100',
            'youtube' => 'min:3|max:100',

        ]);
        $input = $request->all();

        $informacioncentro->update($input);

        return redirect()->route('informacion.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
