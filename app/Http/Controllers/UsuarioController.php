<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cliente;

use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    //
    public function UsuarioIndex(){
        return view('user.dashboard.main');
    }

    public function showProfile()
    {
        $user = Auth::guard('clientes')->user();
        return view('user.dashboard.profile', ['user' => $user]);
    }
    public function editProfile()
{
    $user = Auth::guard('clientes')->user();
    return view('user.dashboard.edit_profile', ['user' => $user]);
}

public function updateProfile(Request $request)
{
    // Verifica si el usuario está autenticado
    if (Auth::guard('clientes')->check()) {
        // Obtiene la instancia del cliente autenticado
        $user = Auth::guard('clientes')->user();

        // Validar los datos del formulario de edición aquí
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las extensiones y el tamaño según tus necesidades
            'direccion'=>'required|string|max:200',
            'celular'=>'required|numeric',
            'edad'=>'required|numeric',
            'estado_civil'=>'required|string|max:10',
        ]);

        // Actualizar los datos del usuario
        $user->nombres = $request->input('nombres');
        $user->apellidos = $request->input('apellidos');
        $user->email = $request->input('email');
        $user->direccion=$request->input('direccion');
        $user->celular=$request->input('celular');
        $user->edad=$request->input('edad');
        $user->estado_civil=$request->input('estado_civil');

        // Actualizar la foto de perfil si se proporciona
        if ($request->hasFile('photo')) {
            // Eliminar la foto anterior si existe
            if ($user->photo) {
                Storage::delete($user->photo);
            }

            // Almacenar la nueva foto
            $path = $request->file('photo')->store('profile_photos', 'public');
            $user->photo = $path;
        }

        // Guardar los cambios en el perfil
        $user->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('user.dashboard.profile')->with('success', 'Perfil actualizado correctamente');
    } else {
        // Manejar el caso en que el usuario no esté autenticado
        return redirect()->route('loginUser');
    }


}

public function verDocumentos()
{
    $cliente = Cliente::findOrFail(Auth::id());
    return view('user.dashboard.ver_documentos', compact('cliente'));
}


}
