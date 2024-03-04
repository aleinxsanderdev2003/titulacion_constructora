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
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;



Route::get('/', [InicioController::class, 'pruebaindex'])->name('index');
Route::get('/contacto' , [vistasController::class, 'contacto'])->name('contacto');
Route::get('/nosotros' , [vistasController::class, 'nosotros'])->name('nosotros');

// RUTAS PARA LA PARTE ADMINISTRATIVA
Route::resource('admin/proyectos', ProyectoController::class);
Route::resource('proyectos', ProyectoController::class);
Route::get('/proyectos', [ProyectoController::class,'index'])->name('admin.proyecto.index');

// routes/web.php
// Route::group(['middleware' => 'web'], function () {
//     Route::get('/login', [LoginController::class, 'mostrarLogin'])->name('login.form');
//     Route::post('/login_sesion', [LoginController::class, 'login'])->name('login');
//     Route::get('/', [InicioController::class, 'index'])->name('index');
// });


// rutas para el login
Route::get('/IniciarSesion', [vistasController::class, 'loginUser'])->name('loginUser');
Route::post('/login', [ClienteController::class, 'login'])->name('login');
Route::get('/forgotPassword', [vistasController::class, 'forgotPass'])->name('forgotPass');

// rutas de post y get de register
Route::get('/Registrarse', [vistasController::class, 'registerUser'])->name('registerUser');
Route::post('/register', [ClienteController::class, 'register'])->name('register');


// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para la vista de presentación
// Route::middleware('auth')->group(function () {
//     Route::get('/admin', [AdminController::class, 'welcome'])->name('admin.welcome');
// });

 Route::get('/admin', [AdminController::class, 'welcome'])->name('admin.welcome');


Route::get('/techo-propio', [TechoPropioController::class, 'mostrar'])->name('techoPropio');
Route::get('/mi-Vivienda', [MiViviendaController::class, 'muestra'])->name('miVivienda');

// ruta para el usuario
Route::get('/usuario', [UsuarioController::class,'UsuarioIndex'])->name('user.UsuarioIndex');
Route::get('/dashboard-user', [vistasController::class,'mainUser'])->name('user.dashboard');
Route::get('/dashboard-user-profile', [UsuarioController::class,'showProfile'])->name('user.dashboard.profile');
Route::get('/dashboard-user-profile-edit', [UsuarioController::class,'editProfile'])->name('user.dashboard.profile_edit');
Route::post('/dashboard-user-profile/update', [UsuarioController::class, 'updateProfile'])->name('user.profile.update');
//
Route::get('/noticias', [NoticiasContoller::class, 'index'])->name('noticias.index');
Route::post('/noticias', [NoticiasContoller::class, 'store'])->name('noticias.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
