<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    protected $redirectTo = '/';
public function mostrarLogin() {

return view("auth.login");

}

public function logout()
{
    Auth::logout(); // Cierra la sesión del usuario
    return redirect()->route('login.form'); // Redirige al formulario de inicio de sesión
}

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // Utiliza tu lógica de autenticación personalizada aquí
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended($this->redirectPath());
        }

        // Si la autenticación falla, muestra un mensaje de error
        return redirect()->route('login.form')
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => trans('auth.failed'),
            ]);
    }

    public function username()
    {
        return 'email'; // Utiliza el campo de correo electrónico como nombre de usuario
    }

}
