<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    public function welcome()
    {
         // Verifica si el usuario está autenticado
    // Si el usuario está autenticado, muestra la vista principal del administrador
    return view('admin.main');
    }

public function loginAdmin()
{
    return view('admin.auth.login');
}

public function authenticateAdmin(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect()->intended('/admin/dashboard');
    }

    return redirect()->back()->withInput()->withErrors(['error' => 'Credenciales inválidas']);
}


public function logout(Request $request)
{
    // Agrega la lógica de logout, por ejemplo, para el guard 'clientes'
    auth('clientes')->logout();

    // Redirige al usuario al formulario de login
    return redirect()->route('admin.login.view');
}
}
