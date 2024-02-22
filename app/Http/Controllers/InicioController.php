<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function pruebaindex(){
        $proyectos = Proyecto::all();

        return view('inicio', compact('proyectos'));
    }
    public function index(){


        return view('inicio');
    }
}
