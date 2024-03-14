<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use App\Models\Documento;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Cliente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:clientes')->except(['login', 'register', 'logout']);
    }
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
            return redirect()->route('registerUser')->withErrors($validator)->withInput();
        }

        // Crear el nuevo usuario
        $cliente = new Cliente();
        $cliente->nombres = $request->input('nombres');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->email = $request->input('email');

        // Imprimir la contraseña hasheada antes de guardarla
        $hashedPassword = Hash::make($request->input('password'));

        $cliente->password = $hashedPassword;
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

    // Intento de autenticación
    if (Auth::guard('clientes')->attempt($credentials)) {
        // Obtener el usuario autenticado
        $user = Auth::guard('clientes')->user();

        // Obtener el nombre completo del usuario
        $nombreUsuario = $user->nombres . ' ' . $user->apellidos;

        // Redireccionar a la página de administración del usuario
        return redirect('/dashboard-user')->with('success', 'Inicio de sesión exitoso. ¡Bienvenido, ' . $nombreUsuario . '!');
    } else {
        // Contraseña incorrecta
        return redirect()->route('loginUser')->with('error', 'Credenciales incorrectas');
    }
}


public function logout()
{
    Auth::guard('clientes')->logout();

    // Mensaje de confirmación

   // Redirige al usuario al formulario de login
   return redirect()->route('loginUser');
}


public function showLoginForm()
{
    return Redirect::route('loginUser');
}

public function mostrarFormularioDocumentos()
{
    return view('user.dashboard.agregar_documentos');
}

/*
public function storeDocumentos(Request $request)
{
    // Validar los documentos enviados por el cliente
    $request->validate([
        'documento1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'documento2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'documento3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Obtener el cliente autenticado
    $cliente = $request->user();

    // Guardar el documento 1
    $documento1Path = $request->file('documento1')->store('public/storage/documentos');
    $cliente->documentos()->create([
        'nombre' => 'Copia DNI',
        'tipo' => 'imagen',
        'ruta' => $documento1Path,
    ]);

    // Guardar el documento 2
    $documento2Path = $request->file('documento2')->store('public/storage/documentos');
    $cliente->documentos()->create([
        'nombre' => 'Copia Literal',
        'tipo' => 'imagen',
        'ruta' => $documento2Path,
    ]);

    // Guardar el documento 3
    $documento3Path = $request->file('documento3')->store('public/storage/documentos');
    $cliente->documentos()->create([
        'nombre' => 'Normas APA',
        'tipo' => 'imagen',
        'ruta' => $documento3Path,
    ]);

    return redirect()->back()->with('success', 'Documentos cargados exitosamente.');
}
 */


 //FUNCION PARA ALAMCENAR LOS DOCUMENTOS EN FORMATO IMAGEN
public function storeDocumentos(Request $request)
{
    // Validar los documentos enviados por el cliente
    $request->validate([
        'documento1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'documento2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'documento3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Obtener el cliente autenticado
    $cliente = $request->user();

    // Guardar el documento 1
    $documento1Path = $request->file('documento1')->store('public/documentos');
    $cliente->documentos()->create([
        'nombre' => 'Copia DNI',
        'tipo' => 'imagen',
        'ruta' => str_replace('public/', '', $documento1Path), // Quita el prefijo 'public/' de la ruta
    ]);

    // Guardar el documento 2
    $documento2Path = $request->file('documento2')->store('public/documentos');
    $cliente->documentos()->create([
        'nombre' => 'Copia Literal',
        'tipo' => 'imagen',
        'ruta' => str_replace('public/', '', $documento2Path), // Quita el prefijo 'public/' de la ruta
    ]);

    // Guardar el documento 3
    $documento3Path = $request->file('documento3')->store('public/documentos');
    $cliente->documentos()->create([
        'nombre' => 'Normas APA',
        'tipo' => 'imagen',
        'ruta' => str_replace('public/', '', $documento3Path), // Quita el prefijo 'public/' de la ruta
    ]);

    return redirect()->back()->with('success', 'Documentos cargados exitosamente.');
}


//FUNCION PARA QUITAR EL DOCUMENTO SUBIDO
public function deleteDocumento($id)
{
    $documento = Documento::findOrFail($id);

    // Verificar si el usuario tiene permiso para eliminar el documento
    if ($documento->cliente_id != auth()->id()) {
        return redirect()->back()->with('error', 'No tienes permiso para eliminar este documento.');
    }

    // Eliminar el archivo del sistema de archivos
    $rutaArchivo = storage_path('app/public/' . $documento->ruta);
    if (File::exists($rutaArchivo)) {
        File::delete($rutaArchivo);
    }

    // Eliminar el registro de la base de datos
    $documento->delete();

    return redirect()->back()->with('success', 'Documento eliminado correctamente.');
}
}
