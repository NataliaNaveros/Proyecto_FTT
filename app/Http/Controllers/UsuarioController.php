<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#use App\User;

class UsuarioController extends Controller
{
    //
    public function index()
    {
    	#$usuario = App\User::all();
        #return view('usuario', ['users'->$usuario]);
        return view('usuario');
    }
}
