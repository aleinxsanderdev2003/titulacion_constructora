<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'imagen_url', 'descripcion', 'categoria'];

    // Define las reglas de validación para la creación y actualización de proyectos
    public static $rules = [
        'nombre' => 'required|string|max:255',
        'imagen_url' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'categoria' => 'required|string|max:255',
    ];

    // Define los mensajes de error personalizados
    public static $messages = [
        'required' => 'El campo :attribute es obligatorio.',
        'string' => 'El campo :attribute debe ser una cadena de texto.',
        'max' => 'El campo :attribute no puede superar :max caracteres.',
    ];
}
