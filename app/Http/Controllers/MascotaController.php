<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MascotaController extends Controller
{
    //
    public function index()
    {
        return view('mascota');
    }
}
