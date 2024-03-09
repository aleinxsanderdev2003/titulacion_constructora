<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function welcome()
    {

         // Verifica si el usuario está autenticado
    if (!auth()->check()) {
        // Redirige a la vista de inicio de sesión para administradores
        return redirect()->route('admin.login.view');
    }

    // Si el usuario está autenticado, muestra la vista principal del administrador
    return view('admin.main');
    }



public function loginAdmin()
{

    return view('admin.auth.login');
}
public function login(Request $request)
{
    // Lógica de autenticación con un array de administradores
    $credentials = $request->only('email', 'password');

    $admins = [
        'admin@wolf.com' => '12345', // Agrega más admin según sea necesario
    ];

    if (isset($admins[$credentials['email']]) && $admins[$credentials['email']] === $credentials['password']) {
        // Autenticación exitosa
        session(['admin' => true]); // Guarda la información de autenticación en la sesión
        return redirect()->route('admin.welcome');
    } else {
        // Autenticación fallida
        return redirect()->route('admin.login.view')->with('error', 'Credenciales incorrectas');
    }
}

public function logout(Request $request)
{
    // Agrega la lógica de logout, por ejemplo, para el guard 'clientes'
    auth('clientes')->logout();

    // Redirige al usuario al formulario de login
    return redirect()->route('admin.login.view');
}
}
