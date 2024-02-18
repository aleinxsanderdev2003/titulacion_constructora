<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasContoller extends Controller
{
public function index(){



return view ("admin.noticias");
}

}
