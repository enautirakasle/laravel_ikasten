<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    echo "Kaixo laravel erz dumoz";
});

Route::get('/probando/ruta', function(){
  return 'get';
});

Route::post('/probando/ruda', function(){
  return 'post';
});

//parametros
Route::get('/parametro/{nombre}', function($nombre){
  return "hola soy $nombre";
});

//controladores
Route::get('/tienda/producto/{id}', 'TiendaController@producto');
Route::get('/tienda/producto_num/{id}', 'TiendaController@producto_num')->where(['id'=>'[0-9]+']);
Route::get('/home/index', 'HomeController@index');
Route::get('/articulo/{id}', 'ArticulosController@ver');
Route::get('/ver_url', 'CategoriaController@mostrarUriUrl');
Route::get('/form', 'PrimerController@form');

Route::get('/articulos', 'PrimerController@articulos');

//rutas que abren vistas
Route::get('algo', function(){
  if(view()->exists('algo')){//comprobar si existe la vista
    return view('algo');
  }else{
    return 'bista ez da existitzen';
  }
});

//vistas con parametros
Route::get('parametros', function(){
  return view('algo_parametros', 
              ['id' => 14,
               'nombre'=>'joxe',
               'apellido' => 'arregi',
               'dni'=>'12312323g']
             );
});


//post
Route::post('recibirId', 'PrimerController@recibirPostId');
Route::post('editar/{id}', 'PrimerController@recibirGetPost');
Route::post('todos', 'PrimerController@recibirPostTodos');

//controladores/parametros opcionales
Route::get('/tienda/num_empleados/{ciudad}/{tienda?}', 'TiendaController@numero_de_empleados');
>>>>>>> 090cc825611b6474d948bd2268495b4469a6f6b5
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
