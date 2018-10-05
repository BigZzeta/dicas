<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
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

//visitas o candidatos que se debe de registrar
Route::get('/registrar', function(){
  return view('candidatos.candidatos');
});


Route::get('/empresa', 'EmpresaController@index')->name('empresas');
Route::get('/empresas/editar/{id}', 'EmpresaController@editar')->name('empresas.editar');
Route::post('/empresas/update/{id?}', 'EmpresaController@update')->name('empresas.update');
Route::get('/empresas/{empresa}', 'EmpresaController@show')
  ->where('empresa', '\w+')
  ->name('empresas.show');


Route::get('/une','UneController@index')->name('unes');
Route::get('/une/nuevo','UneController@create')->name('unes.create');
Route::post('/une/crear', 'UneController@store');
Route::get('/une/editar/{id}', 'UneController@editar')->name('unes.editar');
Route::post('/une/update/{id?}', 'UneController@update')->name('unes.update');
Route::get('/une/{une}', 'UneController@show')
->where('une', '\w+')
->name('unes.show');


Route::get('/usuarios', 'usuario\UserController@index')->name('users');
Route::get('/usuarios/nuevo', 'usuario\UserController@create')->name('users.create');
Route::post('/usuarios/crear','usuario\UserController@store');
Route::get('/usuarios/{user}/editar', 'usuario\UserController@editar')->name('users.editar');
Route::post('/usuarios/update/{users}', 'usuario\UserController@update')->name('users.update');
Route::get('/usuarios/{user}', 'usuario\UserController@show')
  ->where('user', '\w+')
  ->name('users.show');


Route::get('/departamentos','CatDepartamentoController@index')->name('departamentos');
Route::get('/departamentos/nuevo','CatDepartamentoController@create')->name('departamentos.create');
Route::post('/departamentos/crear', 'CatDepartamentoController@store');
Route::get('/departamentos/editar/{id}', 'CatDepartamentoController@editar')->name('departamentos.editar');
Route::post('/departamentos/update/{id?}', 'CatDepartamentoController@update')->name('departamentos.update');
Route::get('/departamentos/{departamentos}', 'CatDepartamentoController@show')
->where('departamento', '\w+')
->name('departamentos.show');

Route::get('/puestos','PuestosController@index')->name('puestos');
Route::get('/puestos/nuevo','PuestosController@create')->name('puestos.create');
Route::post('/puestos/crear', 'PuestosController@store');
Route::get('/puestos/editar/{id?}', 'PuestosController@editar')->name('puestos.editar');
Route::post('/puestos/update/{id?}', 'PuestosController@update')->name('puestos.update');
Route::get('/puestos/{id}', 'PuestosController@show')
->where('puesto', '\w+')
->name('puestos.show');

/*empleados*/
Route::any('/empleados','empleados\EmpleadosController@index')->name('empleados');
Route::any('/empleados/actualizar/{id?}/{id2?}','empleados\EmpleadosController@update')->name('updateEmpleados');
Route::any('/empleados/eliminar/{id?}','empleados\EmpleadosController@delete')->name('deleteEmpleados');
Route::any('/empleados/agregar/{id?}','empleados\EmpleadosController@add')->name('addEmpleados');

/*Administracion de las Une*/
/*Departamentos*/
Route::get('/empresa/asignaDepartamentos','Empresa\Departamentos\DepartamentosController@index')->name('asignaDepaEmpresa');
/*Puestos*/
Route::get('/empresa/asignaPuestos','Empresa\Puestos\PuestosEmpresaController@index')->name('asignaDepaEmpresa');
