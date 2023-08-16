<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function Ingresar(Request $request)
    {
                 
        $produto = new Producto();              
        $produto->descripcion = $request->input('descripcion');
        $produto->calle = $request->input('calle');
        $produto->numero = $request->input('numero');
        $produto->ciudad = $request->input('ciudad');
        $produto->estado = $request->input('estado');
        $produto->id_lote = $request->input('id_lote');        
        $produto->save();

        return response()->json(['message' => 'Producto creado exitosamente'], 200);
      }

      
public function Eliminar($id)
      {
          $producto = Producto::find($id);
      
          if ($producto) {       
              $producto->delete();
              return response()->json(['error' => 'El Producto esta borrado'], 200);
          }
      
          return response()->json(['error' => 'El Producto no existe'], 404);
      }

  
public function Listar(Request $request)
{
    $producto = Producto::all();
    return response()->json($producto);
}

public function Actualizar(Request $request, $id)
      {
          $producto = Producto::findOrFail($id);  
          $producto->descripcion = $request->input('descripcion');
          $producto->calle = $request->input('calle');
          $producto->numero = $request->input('numero');
          $producto->ciudad = $request->input('ciudad');
          $producto->estado = $request->input('estado');
          $producto->id_lote = $request->input('id_lote');  

          $producto->save();          
          return response()->json($producto);
      }



    

}