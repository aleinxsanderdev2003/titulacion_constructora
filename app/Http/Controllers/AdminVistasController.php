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

        // Obtener todos los clientes con sus mensajes
        $clientesConMensajes = Cliente::with('mensajes')->get();

        // Retornar la vista con los mensajes y la lista de clientes
        return view('admin.dashboard.ver_mensajes', compact('mensajes', 'clientesConMensajes'));
    }





    //Mostrar los chats del cliente mediante un alert de sweet alert2
    public function mostrarChatCliente($cliente_id)
    {
        // Obtener el cliente y sus mensajes
        $cliente = Cliente::findOrFail($cliente_id);
        $mensajes = $cliente->mensajes;

        // Devolver la vista del chat del cliente
        return view('admin.dashboard.mensajes_chat', compact('cliente', 'mensajes'));
    }

    public function enviarMensaje(Request $request)
    {
        // Validar el mensaje y verificar la existencia del cliente
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'mensaje' => 'required|string|max:255',
        ]);

        // Crear un nuevo mensaje del administrador
        $mensaje = new Mensaje();
        $mensaje->cliente_id = $request->cliente_id;
        $mensaje->admin_id = auth()->id(); // Obtener el ID del administrador autenticado
        $mensaje->mensaje = $request->mensaje;
        $mensaje->save();

        // Redirigir de vuelta al chat del cliente con un mensaje de éxito
        return redirect()->back()->with('success', 'Documento eliminado correctamente.');



}
}
