<?php

namespace App\Http\Controllers;
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
            'email' => 'required|email|unique:clientes',
            'password' => ['required', 'confirmed', \Illuminate\Validation\Rules\Password::min(8)],
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
        $cliente->password = Hash::make($request->input('password'));
        $cliente->save();

        // Redireccionar o realizar otras acciones después del registro
        return redirect()->route('registerUser')->with('success', '¡Registro exitoso!');
    }


public function login(Request $request)
{
    // lógica de inicio de sesión aquí
}
}
