<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Compartir la variable nombreUsuario con todas las vistas del usuario
        View::composer('*', function ($view) {
            if (Auth::guard('clientes')->check()) {
                $user = Auth::guard('clientes')->user();
                $nombreUsuario = $user->nombres . ' ' . $user->apellidos;
                $view->with('nombreUsuario', $nombreUsuario);
            }
        });
    }
}
