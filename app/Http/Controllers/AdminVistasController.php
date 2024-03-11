<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class AdminVistasController extends Controller
{
    public function mostrarClientes()
{
    $clientes = Cliente::all();
    return view('admin.dashboard.usuarios_all', ['clientes' => $clientes]);
}
public function verDetalleCliente($id)
{
    $cliente = Cliente::find($id);

    if (!$cliente) {
        // Manejo de error si el cliente no existe
        return redirect()->route('admin.clientes')->with('error', 'Cliente no encontrado.');
    }

    return view('admin.dashboard.usuario_detalle', ['cliente' => $cliente]);
}

}
