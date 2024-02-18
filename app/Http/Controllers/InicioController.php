<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function index(){
        $proyectos = Proyecto::all();

        return view('index', compact('proyectos'));
    }

}
