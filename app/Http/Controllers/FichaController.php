<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Centro;
use App\Http\Requests\FichaRequest;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::all();
        return view('fichas.index')->with('fichas',$fichas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centros = Centro::pluck('nombre', 'id');
        
        return view ('fichas.create', compact('centros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FichaRequest $request)
    {
        $ficha = Ficha::create($request->all());

        return redirect()->route('fichas.edit', $ficha);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        return view ('fichas.show' , compact('ficha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
       
        $centros = Centro::pluck('nombre', 'id');
        
       
       
        return view ('fichas.edit' , compact('ficha', 'centros'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FichaRequest $request, Ficha $ficha )
    {
       $ficha->update($request->all());

       return redirect()->route('fichas.edit', $ficha)->with('info', 'Se actualizo la ficha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        $ficha->delete();

        return redirect()->route('fichas.index')->with('info', 'La ficha se eliminó con éxito');


    }
}
