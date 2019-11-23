<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;


class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bus = Bus::all();
        return view('buses.index', compact('bus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('buses.create');
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
        $bus = new Bus;
        $bus->tipo = $request->tipo;
        $bus->marca = $request->marca;
        $bus->placa = $request->placa;
        $bus->capacidad = $request->capacidad;
        $bus->save();
        return back()->with('buses.index');
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
        $bus = Bus::findOrFail($id);
        return view('buses.edit', compact('bus'));
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
        $bus= Bus::findOrFail($id);
        $bus->tipo = $request->tipo;
        $bus->marca = $request->marca;
        $bus->placa = $request->placa;
        $bus->capacidad = $request->capacidad;
        $bus->save();
        return back()->with('buses.update');
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
        Bus::destroy($id);
        #Alert::success('Conductor eliminado con exito');
        return redirect('bus');
    }
}
