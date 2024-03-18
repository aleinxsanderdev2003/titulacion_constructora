<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



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
    // Obtener las credenciales del formulario
    $email = $request->input('email');
    $password = $request->input('password');

    // Validar las credenciales
    if (empty($email) || empty($password)) {
        return redirect()->back()->withErrors(['error' => 'Por favor, proporciona un correo electrónico y una contraseña']);
    }

    // Buscar al administrador en la base de datos
    $admin = DB::table('administrators')->where('email', $email)->first();

    if ($admin) {
        // Verificar si la contraseña es correcta
        if ($this->checkPassword($password, $admin->password)) {
            // Autenticación exitosa
            return redirect()->intended('/admin')->with('success', 'Inicio de sesión exitoso. ¡Bienvenido, ' . $admin->name . '!');
        }
    }

    // Credenciales inválidas
    return redirect()->back()->withErrors(['error' => 'Credenciales inválidas']);
}

private function checkPassword($password, $hashedPassword)
{
    // Verificar si la contraseña cifrada almacenada coincide con la contraseña proporcionada
    return DB::select("SELECT PASSWORD('$password') = '$hashedPassword' AS password_match")[0]->password_match == 1;
}







public function logout(Request $request)
{
    // Agrega la lógica de logout, por ejemplo, para el guard 'clientes'
    auth('clientes')->logout();

    // Redirige al usuario al formulario de login
    return redirect()->route('admin.login.view');
}
}
