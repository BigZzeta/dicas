<?php

//aqui voy a empezar
Route::get('/', function(){
  return view('contenido/dashboard');
});

Route::get('/login', function(){
  return view('login');
});

Route::get('/usuarios', 'UserController@index')
  ->name('users');

Route::get('/usuarios/nuevo', 'UserController@create')
  ->name('users.create');

Route::post('/usuarios/crear','UserController@store');

Route::get('/usuarios/{user}', 'UserController@show')
  ->where('user', '\w+')
  ->name('users.show');

/*empleados*/
Route::any('/empleados','empleados\EmpleadosController@index')->name('empleados');
Route::any('/empleados/ver','empleados\EmpleadosController@show')->name('showEmpleados');
Route::any('/empleados/actualizar/{id?}','empleados\EmpleadosController@update')->name('updateEmpleados');
Route::any('/empleados/eliminar/{id?}','empleados\EmpleadosController@delete')->name('deleteEmpleados');
Route::any('/empleados/agregar/{id?}','empleados\EmpleadosController@add')->name('addEmpleados');
