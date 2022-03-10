<?php

namespace App\Http\Controllers;

use App\Models\PlanPersonalizado;
use Illuminate\Http\Request;

class PlanPersonalizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('planesPersonalizados.index');
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
     * @param  \App\Models\PlanPersonalizado  $planPersonalizado
     * @return \Illuminate\Http\Response
     */
    public function show(PlanPersonalizado $planPersonalizado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanPersonalizado  $planPersonalizado
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanPersonalizado $planPersonalizado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanPersonalizado  $planPersonalizado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanPersonalizado $planPersonalizado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanPersonalizado  $planPersonalizado
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanPersonalizado $planPersonalizado)
    {
        //
    }
}
