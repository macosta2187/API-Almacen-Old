<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lote;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function Insertar(Request $request)
    {

        $lote = new Lote();
        $lote->id = $request->input('lote');
        $lote->save();

        return response()->json(['message' => 'Lote creado exitosamente'], 200);

    }

    public function Eliminar(Request $request, $id)
    {

        $lote = Lote::find($id);

        if ($lote) {
            $lote->delete();
            return response()->json(['error' => 'El Lote esta borrado'], 200);
        }

        return response()->json(['error' => 'El Lote no existe'], 404);
    }

    public function Listar()
    {

        $lote = Lote::all();
        return response()->json($lote);

    }

    public function Actualizar($id)
    {
        $lote = Lote::findOrFail($id);

        $lote->save();
        return response()->json($lote);
    }

}
