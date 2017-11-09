<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function recibirPost(Request $request){
      
    }
  
  public function mostrarUriUrl(Request $request){
    echo $request->path();
    echo '<br>';
    echo $request->url();
  }
}
