<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function welcome()
{

    return view('admin.main');
}


public function loginAdmin()
{

    return view('admin.auth.login');
}

public function login (Request $request)
{
    // Lógica de autenticación con un array de administradores
    $credentials = $request->only('email', 'password');

    $admins = [
        'admin@wolf.com' => '12345', // Agrega más admin según sea necesario
    ];

    if (isset($admins[$credentials['email']]) && $admins[$credentials['email']] === $credentials['password']) {
        // Autenticación exitosa
        return redirect()->route('admin.welcome');
    } else {
        // Autenticación fallida
        return redirect()->route('admin.login')->with('error', 'Credenciales incorrectas');
    }
}

}
