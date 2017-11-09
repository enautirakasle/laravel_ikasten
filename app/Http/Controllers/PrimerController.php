<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrimerController extends <?php
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
  
}Controller
{

   public function recibirPostId(Request $request){
      echo $request->input('id');
    }
  
  public function recibirPostTodos(Request $request){
    $todos_los_parametros = $request->all();
    print_r($todos_los_parametros);
  }
 
  public function recibirGetPost(Request $request, $id){
     echo('<br><br>------' . $id);
    dd($request->all());
   
  }
  
  public function form(){
    return view('probak/form');
  }
  
  public function articulos(){
    \App\Article::all();
  }
  
}
