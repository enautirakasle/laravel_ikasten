<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrimerController extends Controller
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
