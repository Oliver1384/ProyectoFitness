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
        $informacion = Informacioncentro::find(1);
        return view('informacion.index', compact('informacion'));
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
    public function edit($id, Informacioncentro $informacion)
    {

        $informacion = Informacioncentro::find($id);
        return view('informacion.edit', compact('informacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       
        $request->validate([
            'descripcion' => 'required|min:10|max:100',
            'direccion' => 'min:3|max:100',
            'telefono' => 'min:6|max:50',
            'correo' => 'required|min:10|max:80|email:rfc',
            'facebook' => 'min:3|max:100',
            'instagram' => 'min:3|max:100',
            'youtube' => 'min:3|max:100',

        ]);

        $input = $request->all();
        //dd($id);
        Informacioncentro::find(1)->update($input);

        return redirect()->route('informacionCentro.index');

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
