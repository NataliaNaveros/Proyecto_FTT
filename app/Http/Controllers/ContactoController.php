<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Contacto;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        #$contacto = App\Contacto::all();
        #return view('contacto',compact($contacto));
        return view('contacto');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('contacto.create');
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
        $contacto = new Contacto;
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->telefono = $request->telefono;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();
        return back()->with('contacto', 'El mensaje fue enviado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $contacto = Contacto::all();
        return view('notificaciones', compact('contacto'));
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
        Contacto::destroy($id);
        #Alert::success('Conductor eliminado con exito');
        return redirect('notificaciones');
    }
}
