<?php

//aqui voy a empezar
Route::get('/', function(){
  return view('contenido/dashboard');
});

Route::get('/login', function(){
  return view('login');
});

Route::get('/home2', function(){
  return view('contenido/contenido');
});

Route::get('/usuarios', 'UserController@index')
  ->name('users');

Route::get('/usuarios/nuevo', 'UserController@create')
  ->name('users.create');

Route::post('/usuarios/crear','UserController@store');

Route::get('/usuarios/{user}', 'UserController@show')
  ->where('user', '\w+')
  ->name('users.show');



//demas código

//Route::get('/', 'UserController@index')->name('inicio');

//Route::get('/', 'Ctrl_empleado\EmpleadoController@index')->name('inicio');

/*
use GuzzleHttp\Client; //de momento, esto va ir en un controlador

Route::get('/', 'Ctrl_empleado\EmpleadoController@index')->name('inicio');
Route::any('Ctrl_empleado/EmpleadoController', 'Ctrl_empleado\EmpleadoController@login')->name('logueo'); //ruta ajax login
*/

/* inicio crud empleados
Route::any('Ctrl_empleado/EmpleadoController/agregar', 'Ctrl_empleado\EmpleadoController@agregar')->name('add_empleado'); //ruta ajax login
/* fin crud empleados*/

/*
Route::get('controlEmpleados/inicioEmpleado', 'Ctrl_empleado\EmpleadoController@panelControl')->name('panelControl');

Route::get('panelDepa', function() {
    return view('controlDepartamentos.panelDepa', array('var' => 'hello world'));
});

Route::any('/empleados','Ctrl_empleado\EmpleadoController@empleados');

Route::get('/uno', function() {
    $client = new Client([
        // Base URI is used with relative requests
        /* 'base_uri' => 'http://apiservisky.sytes.net', */
  //      'base_uri' => 'http://api.com',
        // You can set any number of default request options.
  //      'timeout' => 2.0,
  //  ]);
  //  $response = $client->request('GET', 'api/empleados');
  //  $datos = json_decode($response->getBody()->getContents());
  //  return view('plantillas.prueba', compact('datos'));
