<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
    $user = Auth::guard('clientes')->user();

    // Validar los datos del formulario de edición aquí
    $request->validate([
        'nombres' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'email' => 'required|email',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las extensiones y el tamaño según tus necesidades
    ]);

    // Actualizar los datos del usuario
    $user->update([
        'nombres' => $request->input('nombres'),
        'apellidos' => $request->input('apellidos'),
        'email' => $request->input('email'),
    ]);

    // Actualizar la foto de perfil si se proporciona
    if ($request->hasFile('photo')) {
        // Eliminar la foto anterior si existe
        if ($user->photo) {
            Storage::delete($user->photo);
        }

        // Almacenar la nueva foto
        $path = $request->file('photo')->store('profile_photos', 'public');
        $user->update(['photo' => $path]);
    }

    // Redireccionar con un mensaje de éxito
    return redirect()->route('user.profile')->with('success', 'Perfil actualizado correctamente');
}
}
