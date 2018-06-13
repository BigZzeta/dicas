<?php

Route::get('/', function () {
    //return view('contenido/contenido');
    return "hola";
});

Route::get('/usuarios2', function () {
  //return view('contenido/contenido');
  return "hola";
});

Route::get('/visitante', function () {
  return view('welcome');
  //return 'Home';
})->name('inicio');

Route::get('/vistaEmpleado',function(){
    return view('crudEmpleados/vistaEmpleados');
})->name('bEntrada');


//aqui voy a empezar
Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/usuarios/{id}', 'UserController@show')
      ->where('id', '\w+');


Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null ){

  if ($nickname){
    return "Bienvenido {$name}, tu apodo es {$nickname}";
  }else{
    return "Bienvenido {$name}, No tienes apodo";
  }

});


Route::get('/departamento', 'DepartamentoController@index');
Route::post('/departamento/registrar', 'DepartamentoController@store');
Route::put('/departamento/actualizar', 'DepartamentoController@update');
Route::put('/departamento/desactivar', 'DepartamentoController@desactivar');
Route::put('/departamento/activar', 'DepartamentoController@activar');

