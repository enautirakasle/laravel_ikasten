<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
	public function index(){
		return "Ongietorri Laravel 5 kurtsora";
	}
	
	public function getId($id1, $id2){
		return "<p>Los dos ids son : " . $id1 . " y " . $id2 . "</p>";
	}
	
	public function showView(){
		$msg = "Arendiendo laravel 5";
		return View("home.showView", ['msg' => $msg]);
	}
}