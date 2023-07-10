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
        $almacen->direccion = $request->input('direccion');
        $almacen->ciudad = $request->input('ciudad');
        $almacen->latitud = $request->input('latitud');
        $almacen->longitud = $request->input('longitud');
        $almacen->telefono = $request->input('telefono');
        $almacen->save();

        return $almacen;

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
        $almacen->direccion = $request->input('direccion');
        $almacen->ciudad = $request->input('ciudad');
        $almacen->latitud = $request->input('latitud');
        $almacen->longitud = $request->input('longitud');
        $almacen->telefono = $request->input('telefono');

        $almacen -> save();
        return $almacen;

    }

}