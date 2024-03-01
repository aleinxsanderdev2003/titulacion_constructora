<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
            // ($validator->errors());
            return redirect()->route('registerUser')->withErrors($validator)->withInput();
        }

        // dd($request->all());
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
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('loginUser')->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // dd(Auth::user()); // Puedes usar var_dump(Auth::user()) también

            // El usuario ha sido autenticado correctamente
            return redirect('/admin');
        } else {
            // La autenticación ha fallado
            return redirect()->route('loginUser')->with('error', 'Credenciales incorrectas');
        }
    }
}
