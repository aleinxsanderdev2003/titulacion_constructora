<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Models\Documento;
class DocumentoController extends Controller
{
    public function downloadDocumento($id, $format)
    {
        $documento = Documento::findOrFail($id);

        // Verificar si el documento existe
        if (!$documento) {
            return redirect()->back()->with('error', 'Documento no encontrado.');
        }

        // Obtener la ruta del documento
        $ruta = $documento->ruta;

        // Verificar el formato solicitado
        if ($format === 'image') {
            // Obtener el contenido del archivo
            $contenido = Storage::get($ruta);

            // Devolver la respuesta con el contenido del archivo y los encabezados adecuados
            return (new Response($contenido, 200))
                ->header('Content-Type', 'image/jpeg')
                ->header('Content-Disposition', 'attachment; filename="' . $documento->nombre . '"');
        } else {
            // Formato no válido
            return redirect()->back()->with('error', 'Formato de descarga no válido.');
        }
    }
}
