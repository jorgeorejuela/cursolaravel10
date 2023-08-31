<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Para administrar una unica ruta en Laravel
    public function __invoke()
    {
        return view('home');
    }
}
