<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Semestre7Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('licenciatura.index');
    }

    public function semestre()
    {
        return view('licenciatura.semestres');
    }

    public function show($sem)
    {
        //compact ('$semestre'); //['semestre' => $semestre]; //otra manera de pasar variables.
        return view('licenciatura.show', ['semes' => $sem]);
    }
}
