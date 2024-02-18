<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('admin.proyecto.proyectos', compact('proyectos'));
    }

    public function create()
    {
        return view('admin.proyectos.create');
    }

    public function store(Request $request)
{
    // Valida y guarda el nuevo proyecto en la base de datos
    $request->validate([
        'nombre' => 'required',
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen
        'descripcion' => 'required',
        'categoria' => 'required',
    ]);

    // Procesa la imagen y almacénala en la carpeta de imágenes
    $imagenPath = $request->file('imagen')->store('public/imagenes');

    // Crea una nueva instancia de Proyecto con los datos validados y la URL de la imagen
    Proyecto::create([
        'nombre' => $request->nombre,
        'imagen_url' => str_replace('public/', 'storage/', $imagenPath), // Ruta a la imagen en storage
        'descripcion' => $request->descripcion,
        'categoria' => $request->categoria,
    ]);

    return redirect()->route('admin.proyecto.index')
        ->with('success', 'Proyecto creado exitosamente.');
}



    public function edit(Proyecto $proyecto)
    {
        return view('admin.proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        // Valida y actualiza el proyecto en la base de datos
        $request->validate([
            'nombre' => 'required',
            'imagen_url' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto actualizado exitosamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto eliminado exitosamente.');
    }
}
