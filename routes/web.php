<?php
use App\Http\Controllers\TechoPropioController;
use App\Http\Controllers\MiViviendaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\vistasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\AdminVistasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
 // RUTAS WEB
 Route::get('/techo-propio', [vistasController::class, 'mostrar'])->name('techoPropio');
 Route::get('/mi-Vivienda', [vistasController::class, 'muestra'])->name('miVivienda');
Route::get('/', [InicioController::class, 'pruebaindex'])->name('index');
Route::get('/contacto' , [vistasController::class, 'contacto'])->name('contacto');
Route::get('/nosotros' , [vistasController::class, 'nosotros'])->name('nosotros');

// rutas para el login
Route::get('/IniciarSesion', [vistasController::class, 'loginUser'])->name('loginUser');
Route::post('/login', [ClienteController::class, 'login'])->name('login');
Route::get('/forgotPassword', [vistasController::class, 'forgotPass'])->name('forgotPass');

// rutas de post y get de register
Route::get('/Registrarse', [vistasController::class, 'registerUser'])->name('registerUser');
Route::post('/register', [ClienteController::class, 'register'])->name('register');

// ADMIN RUTAS
    Route::get('/admin', [AdminController::class, 'welcome'])->name('admin.welcome');
    Route::get('/admin-iniciarsesion', [AdminController::class, 'loginAdmin'])->name('admin.login.view');
    Route::post('/loginAdmin', [AdminController::class, 'login'])->name('login.admin');
    Route::post('/logoutadmin', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/clientes', [AdminVistasController::class, 'mostrarClientes'])->name('admin.clientes');
    Route::get('/admin/cliente/{id}', [AdminVistasController::class,'verDetalleCliente'])->name('admin.cliente.verDetalle');
// ruta para el usuario
Route::get('/usuario', [UsuarioController::class,'UsuarioIndex'])->name('user.UsuarioIndex');
Route::get('/dashboard-user', [vistasController::class,'mainUser'])->name('user.dashboard');
Route::get('/dashboard-user-profile', [UsuarioController::class,'showProfile'])->name('user.dashboard.profile');
Route::get('/dashboard-user-profile-edit', [UsuarioController::class,'editProfile'])->name('user.dashboard.profile_edit');
Route::post('/dashboard-user-profile/update', [UsuarioController::class, 'updateProfile'])->name('user.profile.update');
Route::get('/logout', [ClienteController::class, 'updateProfile'])->name('admin.logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


