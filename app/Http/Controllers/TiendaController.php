<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TiendaController extends Controller{

  public function producto($id)
  {
      return "Esto muestra un producto. Recibiendo $id";
  }
}