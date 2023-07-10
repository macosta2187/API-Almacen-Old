<?php

namespace Tests\Feature;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\AlmacenController;

use Illuminate\Support\Facades\Log;

class ExampleTest extends TestCase
{
    
  
 public function testAlmacen()
    {
        $response = $this->get('http://127.0.0.1:8000/api/APIlistarAlmacen');
        $response->assertStatus(200);

     
        $logData = [
            'ruta' => 'http://127.0.0.1:8000/api/APIlistarAlmacen',
            'codigo_estado' => $response->getStatusCode(),
            'contenido' => $response->getContent()
        ];

        Log::info('Resultado del test de mostrar almacen por metodo GET ', $logData);
    }


        
       
public function testAPIinsertoalmacen()    {
          

        $almacen = [                                
            
            'direccion' => 'TEST',
            'ciudad' => 'TEST',
            'latitud' => '37.7749',
            'longitud' => '-122.4194',
            'telefono' => 'TEST'


        ];
    
        $response = $this->post('http://127.0.0.1:8000/api/APIinsertoAlmacen', $almacen);    
        $response->assertStatus(200);
    
        // Guardar en el archivo de log
        $logData = [
            'ruta' => 'http://127.0.0.1:8000/api/APIinsertoAlmacen',
            'codigo_estado' => $response->getStatusCode(),
            'contenido' => $response->getContent(),
            'almacen' => $almacen
        ];
    
        Log::info('Resultado de la prueba POST', $logData);
    }




}
