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

public function login(Request $request)
{
    // Validar los datos del formulario
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('admin.login.view')->withErrors($validator)->withInput();
    }

    $credentials = $request->only('email', 'password');

    // Intento de autenticación
    if (Auth::guard('administrators')->attempt($credentials)) {
        // Obtener el usuario autenticado
        $user = Auth::guard('administrators')->user();

        // Obtener el nombre completo del usuario
        $nombreUsuario = $user->nombres . ' ' . $user->apellidos;

        // Redireccionar a la página de administración del usuario

        return redirect('/admin')->with('success', 'Inicio de sesión exitoso. ¡Bienvenido, ' . $nombreUsuario . '!');
    } else {
        // Contraseña incorrecta
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
