<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistasController extends Controller
{
    public function index(){
        return view("index");
    }


    public function contacto(){
        return view("contacto");
    }

    public function nosotros(){
        return view("nosotros");
    }



}
