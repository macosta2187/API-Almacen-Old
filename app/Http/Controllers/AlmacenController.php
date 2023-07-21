<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Almacen;
use Illuminate\Support\Facades\Redirect;

class AlmacenController extends Controller
{
    

public function APIinsertoAlmacen(Request $request)
    {
                 
        $almacen = new Almacen;              
        $almacen->nombre = $request->input('nombre');
        $almacen->calle = $request->input('calle');
        $almacen->numero = $request->input('numero');
        $almacen->ciudad = $request->input('ciudad');
        $almacen->latitud = $request->input('latitud');
        $almacen->longitud = $request->input('longitud');
        $almacen->save();

       
       return response()->json(['message' => 'Almacén creado exitosamente'], 200);
      

      }
       

public function APIEliminarAlmacen(Request $request,$id){

        $almacen = Almacen::find($id);
    
        if ($almacen) {       
            $almacen->delete();
            return response()->json(['error' => 'El almacén esta borrado'], 200);
        }
    
        return response()->json(['error' => 'El almacén no existe'], 404);
    }
  


public function APIlistarAlmacen(Request $request){  
       
    $almacen = Almacen::all();
    return response()->json($almacen);
    }

    


public function APIModificarAlmacen(Request $request, $idalmacen){

        $almacen = Almacen::findOrFail($idalmacen);        
        $almacen->nombre = $request->input('nombre');
        $almacen->calle = $request->input('calle');
        $almacen->numero = $request->input('numero');
        $almacen->ciudad = $request->input('ciudad');
        $almacen->latitud = $request->input('latitud');
        $almacen->longitud = $request->input('longitud');

        $almacen -> save();
        return response()->json($almacen);

    }

}
