<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruta;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ruta = Ruta::all();
        return view('rutas.index', compact('ruta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('rutas.create');
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
        $ruta = new Ruta;
        $ruta->nombre = $request->nombre;
        $ruta->distancia = $request->distancia;
        $ruta->save();
        return back()->with('rutas.index');
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
        //
        $ruta = Ruta::findOrFail($id);
        return view('rutas.edit', compact('ruta'));
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
        $ruta= Ruta::findOrFail($id);
        $ruta->nombre = $request->nombre;
        $ruta->distancia = $request->distancia;
        $ruta->save();
        return back()->with('rutas.update');
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
        Ruta::destroy($id);
        #Alert::success('Conductor eliminado con exito');
        return redirect('ruta');
    }
}
