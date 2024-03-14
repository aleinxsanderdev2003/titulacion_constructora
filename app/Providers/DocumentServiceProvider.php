<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Documento;
class DocumentServiceProvider extends ServiceProvider

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
        // Compartir la variable $documentos con todas las vistas
        View::composer('*', function ($view) {
            // Obtener todos los documentos sin importar la autenticación del usuario
            $documentos = Documento::all();
            // Compartir la variable $documentos con la vista
            $view->with('documentos', $documentos);
        });
    }

}
