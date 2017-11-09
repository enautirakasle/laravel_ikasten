<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
	public function index(){
		return "Ongietorri Laravel 5 kurtsora";
	}
	
	public function getId($id1, $i<?php

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
d2){
		return "<p>Los dos ids son : " . $id1 . " y " . $id2 . "</p>";
	}
	
	public function showView(){
		$msg = "Arendiendo laravel 5";
		return View("home.showView", ['msg' => $msg]);
	}
}