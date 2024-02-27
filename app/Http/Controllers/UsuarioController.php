<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function UsuarioIndex(){
        return view('user.dashboard.main');
    }
}
