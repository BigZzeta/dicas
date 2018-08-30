<?php

/*Route::get('/', 'usuario\UserController@index')
  ->name('users');*/
/*Ruta de inicio de la aplicacion*/
Route::get('/','Login\LoginController@index')->name('start');
/*fin de la ruta de inicio de la aplicacion*/
Route::any('/validar','Login\LoginController@valida')->name('validar');
Route::get('/inicio', function (){return view('inicio');})->name('inicio');

Route::get('/dashboard', function(){
  return view('contenido.dashboard');
});

//probar esta ruta para el login
Route::get('/loginx', function(){
  return view('login');
});


Route::get('/usuarios', 'usuario\UserController@index')->name('users');
Route::get('/usuarios/nuevo', 'usuario\UserController@create')->name('users.create');
Route::post('/usuarios/crear','usuario\UserController@store');
Route::get('/usuarios/{user}/editar', 'usuario\UserController@editar')->name('users.editar');
Route::any('/usuarios/update/{users}', 'usuario\UserController@update')->name('users.update');

Route::get('/usuarios/{user}', 'usuario\UserController@show')
  ->where('user', '\w+')
  ->name('users.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*empleados*/
Route::any('/empleados','empleados\EmpleadosController@index')->name('empleados');
Route::any('/empleados/actualizar/{id?}/{id2?}','empleados\EmpleadosController@update')->name('updateEmpleados');
Route::any('/empleados/eliminar/{id?}','empleados\EmpleadosController@delete')->name('deleteEmpleados');
Route::any('/empleados/agregar/{id?}','empleados\EmpleadosController@add')->name('addEmpleados');


