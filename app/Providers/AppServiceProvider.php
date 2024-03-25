<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Documento;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Compartir la variable $documentos con todas las vistas
         View::composer('admin.layouts.app', function ($view) {
            if (Auth::check()) {
                $adminId = Auth::id();
                $admin = Admin::find($adminId);
                if ($admin) {
                    $view->with('adminName', $admin->name);
                }
            }
        });
    }
}
