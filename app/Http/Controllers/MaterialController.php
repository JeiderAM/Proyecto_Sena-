<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materials = Material::all();
        return view('Material.index')->with('materials',$materials);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materials = new Material ();
        
        $materials->nombre = $request->get('nombre');
        $materials->codigo = $request->get('codigo');
        $materials->descripcion = $request->get('descripcion');
        $materials->tipo = $request->get('tipo');
        $materials->cantidad = $request->get('cantidad');
        $materials->detalles = $request->get('detalles');

        $materials->save();

        return redirect('/materials');

    
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
    public function edit($id)
    {
        $material = Material::find($id);
        return view('Material.edit')->with('material',$material);
        
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
        //
        $material = Material::find($id);
        
        $material->nombre = $request->get('nombre');
        $material->codigo = $request->get('codigo');
        $material->descripcion = $request->get('descripcion');
        $material->tipo = $request->get('tipo');
        $material->cantidad = $request->get('cantidad');
        $material->detalles = $request->get('detalles');

        $material->save();

        return redirect('/materials');  

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
        $material = Material::find($id);
        $material->delete();
        return redirect('/materials'); 
    }
}
