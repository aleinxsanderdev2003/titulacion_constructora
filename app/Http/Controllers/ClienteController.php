<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
class ClienteController extends Controller
{
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        // Después de la validación
        if ($validator->fails()) {
            return redirect()->route('registerUser')->withErrors($validator)->withInput();
        }

        // Crear el nuevo usuario
        $cliente = new Cliente();
        $cliente->nombres = $request->input('nombres');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->email = $request->input('email');

        // Imprimir la contraseña hasheada antes de guardarla
        $hashedPassword = Hash::make($request->input('password'));

        $cliente->password = $hashedPassword;
        $cliente->save();

        // Redireccionar o realizar otras acciones después del registro
        return redirect()->route('registerUser')->with('success', '¡Registro exitoso!');
    }

    public function login(Request $request)
{
    // Validar los datos del formulario
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('loginUser')->withErrors($validator)->withInput();
    }

    $credentials = $request->only('email', 'password');

    // Intento de autenticación
    if (Auth::guard('clientes')->attempt($credentials)) {
        // Obtener el usuario autenticado
        $user = Auth::guard('clientes')->user();

        // Obtener el nombre completo del usuario
        $nombreUsuario = $user->nombres . ' ' . $user->apellidos;

        // Redireccionar a la página de administración del usuario
        return redirect('/dashboard-user')->with('success', 'Inicio de sesión exitoso. ¡Bienvenido, ' . $nombreUsuario . '!');
    } else {
        // Contraseña incorrecta
        return redirect()->route('loginUser')->with('error', 'Credenciales incorrectas');
    }
}


public function logout()
{
    Auth::guard('clientes')->logout(); // Utiliza el guard correspondiente

    return redirect('/login'); // Redirige a la página de inicio de sesión o a donde desees
}

public function updateProfile(Request $request)
    {
        // Lógica para actualizar el perfil del cliente
        // ...

        return redirect()->route('admin.login.view');
    }

}
