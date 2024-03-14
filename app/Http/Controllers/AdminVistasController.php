<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

use App\Models\Departamento;
use App\Models\Documento;
use App\Models\Provincia;
use App\Models\Mensaje;
use App\Models\Distrito;
class AdminVistasController extends Controller
{
    public function mostrarClientes()
{
    $clientes = Cliente::all();
    $departamentos = Departamento::all();
    $provincias = Provincia::all();
    $distritos = Distrito::all();

    return view('admin.dashboard.usuarios_all', compact('clientes', 'departamentos', 'provincias', 'distritos'));

}public function verDetalleCliente($id)
{
    $cliente = Cliente::find($id);

    if (!$cliente) {
        // Manejo de error si el cliente no existe
        return redirect()->route('admin.clientes')->with('error', 'Cliente no encontrado.');
    }

    // Obtener los documentos del cliente
    $documentos = Documento::where('cliente_id', $id)->get();

    return view('admin.dashboard.usuario_detalle', compact('cliente', 'documentos'));
}
 // Asegúrate de importar el modelo Cliente si aún no lo has hecho

public function verMensajes()
{
    // Obtener todos los mensajes ordenados por fecha de creación
    $mensajes = Mensaje::orderBy('created_at', 'desc')->get();

    // Obtener la lista de todos los clientes
    $clientes = Cliente::all();

    // Retornar la vista con los mensajes y la lista de clientes
    return view('admin.dashboard.ver_mensajes', compact('mensajes', 'clientes'));
}
public function show($cliente_id)
{
    $cliente = Cliente::find($cliente_id);
    $mensajes = $cliente->mensajes; // Suponiendo que tienes una relación "mensajes" en tu modelo Cliente

    return view('admin.dashboard.mensajes_chat', compact('cliente', 'mensajes'));
}
}
