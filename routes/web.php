<?php

Route::get('/', 'usuario\UserController@index')->name('inicio');

Route::get('/dashboard', function(){
  return view('contenido/dashboard');
});

Route::get('/usuarios', 'usuario\UserController@index')
  ->name('users');

Route::get('/usuarios/nuevo', 'usuario\UserController@create')->name('users.create');

Route::post('/usuarios/crear','usuario\UserController@store');

Route::get('/usuarios/{user}/editar', 'usuario\UserController@editar')->name('users.editar');

Route::put('/usuarios/{user}/actualizar','usuario\UserController@update');

Route::get('/usuarios/{user}', 'usuario\UserController@show')
  ->where('user', '\w+')
  ->name('users.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//sadsdsd
// Route::put('/usuarios/{user}', 'UserController@update');
// Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy');

/*empleados*/
Route::any('/empleados','empleados\EmpleadosController@index')->name('empleados');
Route::any('/empleados/ver','empleados\EmpleadosController@show')->name('showEmpleados');
Route::any('/empleados/actualizar/{id?}/{id2?}','empleados\EmpleadosController@update')->name('updateEmpleados');
Route::any('/empleados/eliminar/{id?}','empleados\EmpleadosController@delete')->name('deleteEmpleados');
Route::any('/empleados/agregar/{id?}','empleados\EmpleadosController@add')->name('addEmpleados');
