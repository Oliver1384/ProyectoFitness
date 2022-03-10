<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $planes;
        if(isset($request->all()['texto']) && !empty(trim($request->get('texto')))){
            $texto = trim($request->get('texto'));
            $planes = DB::table('planes')->select('*')->where('titulo', 'LIKE', "%{$texto}%")->paginate(6);
        }else{
            $planes = Plan::latest()->paginate(6);
        }
        

        return view('planes.index', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planes.create');
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
            'titulo' => 'required|min:3|max:50',
            'descripcion' => 'required|min:50|max:10000',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('imagen')) {
            $imageDestinationPath = 'uploads/';
            $imagenPlan = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $imagenPlan);
            $input['imagen'] = "{$imageDestinationPath}{$imagenPlan}";
        }

        $input['user_id'] = 1; // Cambiar esto una vez implementado el login, esto deberá ser auth()->user()->id
        Plan::create($input);
        return redirect()->route('planes.index')->with('success','Plan creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        
        $plan = Plan::find($request->all()['id']);
        return view('planes.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->all()['id'];
        $plan = Plan::find($id);
        return view('planes.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'titulo' => 'required|min:5|max:80',
            'descripcion' => 'required|min:50|max:10000',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if (!empty($image = $request->file('imagen'))) {
            $imageDestinationPath = 'uploads/';
            $imagenPlan = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $imagenPlan);
            $input['imagen'] = "{$imageDestinationPath}{$imagenPlan}";

        } else {
            unset($input['img']);
        }
        $plan = Plan::find($request['id']);
        $plan->update($input);

        return redirect()->route('planes.index')->with('success','Plan actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        dd($plan);
    }

    public function eliminarPlan(Request $request){
        $plan = Plan::find($request->all()['id']);
        $plan->delete();
        return redirect()->route('planes.index')->with('success','Plan eliminado correctamente');
    }
}
