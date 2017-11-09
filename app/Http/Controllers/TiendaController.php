<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TiendaController extends Controller{

  public function producto($id)
  {
      return "Esto muestra un producto. Recibiendo $id";
  }
  
    public function producto_num($id)
  {
      return "Esto muestra un producto con id numerico. Recibiendo $id";
  }
  
  public function numero_de_empleados($ciudad, $tienda = 1)
  {
      return "en $ciudad hay empleados en la tienda $tienda";
  }
  
}