<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        // Si el usuario intenta acceder a una ruta protegida para administradores,
        // redirige a la ruta loginAdmin en lugar de loginUser
        if ($request->route()->named('admin.*')) {
            return route('admin.vistalogin');
        }

        // Si no, redirige a la ruta loginUser como antes
        return $request->expectsJson() ? null : route('loginUser');
    }

    // protected function redirectTo(Request $request): ?string
    // {
    //     // Si la solicitud espera una respuesta JSON, no redirigir
    //     if ($request->expectsJson()) {
    //         return null;
    //     }

    //     // Verificar si la ruta actual está relacionada con el administrador
    //     if ($request->route()->named('admin.*')) {
    //         return route('admin.vistalogin'); // Redirige al login de administrador
    //     }

    //     // En cualquier otro caso, redirige al login de clientes
    //     return route('loginUser');
    // }


}
