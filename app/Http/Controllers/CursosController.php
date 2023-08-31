<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //Administrar varias rutas desde un mismo controlador
    public function index()
    {
        return view('cursos.index');
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($curso)
    {
        return view('cursos.show', ['curso' => $curso]);
    }
}
