<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\Provincia;
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
