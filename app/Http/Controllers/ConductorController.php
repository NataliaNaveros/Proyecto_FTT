<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conductor;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $conductor = Conductor::all();
        return view('conductores.index', compact('conductor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('conductores.create');
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
        $conductor = new Conductor;
        $conductor->nombre = $request->nombre;
        $conductor->apellido = $request->apellido;
        $conductor->cedula = $request->cedula;
        $conductor->telefono = $request->telefono;
        $conductor->email = $request->email;
        $conductor->save();
        return back()->with('conductores.index');
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
        $conductor = Conductor::findOrFail($id);
        return view('conductores.edit', compact('conductor'));
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
        $conductor= Conductor::findOrFail($id);
        $conductor->nombre = $request->nombre;
        $conductor->apellido = $request->apellido;
        $conductor->cedula = $request->cedula;
        $conductor->telefono = $request->telefono;
        $conductor->email = $request->email;
        $conductor->save();
        return back()->with('conductores.update');
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
        #$conductor= Conductor::findOrFail($id);
        Conductor::destroy($id);
        #Alert::success('Conductor eliminado con exito');
        return redirect('conductores');
    }
}
