<?php
use App\Http\Controllers\TechoPropioController;
use App\Http\Controllers\MiViviendaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\vistasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProyectoController;

use App\Http\Controllers\NoticiasContoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [InicioController::class, 'pruebaindex'])->name('index');
Route::get('/contacto' , [vistasController::class, 'contacto'])->name('contacto');
Route::get('/nosotros' , [vistasController::class, 'nosotros'])->name('nosotros');

// RUTAS PARA LA PARTE ADMINISTRATIVA
Route::resource('admin/proyectos', ProyectoController::class);
Route::resource('proyectos', ProyectoController::class);
Route::get('/proyectos', [ProyectoController::class,'index'])->name('admin.proyecto.index');

// routes/web.php
Route::group(['middleware' => 'web'], function () {
    // Rutas de autenticación
    Route::get('/login', [LoginController::class, 'mostrarLogin'])->name('login.form');
    Route::post('/login_sesion', [LoginController::class, 'login'])->name('login');
    Route::get('/', [InicioController::class, 'index'])->name('index');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Ruta para la vista de presentación
Route::get('/admin', [AdminController::class,'welcome'])->name('admin.welcome');
Route::get('/techo-propio', [TechoPropioController::class, 'mostrar'])->name('techoPropio');
Route::get('/mi-Vivienda', [MiViviendaController::class, 'muestra'])->name('miVivienda');



//

Route::get('/noticias', [NoticiasContoller::class, 'index'])->name('noticias.index');
//Route::get('/noticias/create', [NoticiasController::class, 'create'])->name('noticias.create');
Route::post('/noticias', [NoticiasContoller::class, 'store'])->name('noticias.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
