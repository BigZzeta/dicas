<?php

Auth::routes();

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function (){
  return view('welcome');
})->name('inicio');

Route::get('/inicio', function (){
  return view('inicio');
})->name('inicio');


// Route::get('/home', 'HomeController@index')->name('home');

Route::any('/validar','Login\LoginController@valida')->name('validar');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

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
Route::post('/empresa/creaDepaEmp','Empresa\Departamentos\DepartamentosController@create')->name('creaDepaEmpresa');
Route::post('/empresa/validaDepa','Empresa\Departamentos\DepartamentosController@validaDepa')->name('validaDepa'); //ajax validacion
Route::get('/empresa/asignaP','Empresa\Departamentos\DepartamentosController@asignaPuesto')->name('asignaPuesto'); //asigna Puesto
Route::post('/empresa/vp_depa','Empresa\Departamentos\DepartamentosController@validaP_depa')->name('validaP_depa'); //ajax_valida_departamentos para asignar puestos


Route::get('/pagadora','PagadoraController@index')->name('pagadora');
Route::get('/pagadora/nuevo','PagadoraController@create')->name('pagadoras.create');
Route::post('/pagadora/crear', 'PagadoraController@store');
Route::get('/pagadora/editar/{id}', 'PagadoraController@editar')->name('pagadoras.editar');
Route::post('/pagadora/update/{id?}', 'PagadoraController@update')->name('pagadoras.update');
Route::get('/pagadora/{pagadora}', 'PagadoraController@show')
->where('pagadora', '\w+')
->name('pagadoras.show');

Route::get('/horarios','HorarioController@index')->name('horarios');
Route::get('/horarios/nuevo','HorarioController@create')->name('horarios.create');
Route::post('/horarios/crear', 'HorarioController@store');
Route::get('/horarios/editar/{id}', 'HorarioController@editar')->name('horarios.editar');
Route::post('/horarios/update/{id?}', 'HorarioController@update')->name('horarios.update');
Route::get('/horarios/{horario}', 'HorarioController@show')
->where('horario', '\w+')
->name('horarios.show');

Route::get('/incidencias','IncidenciasController@index')->name('incidencias');
Route::get('/incidencias/nuevo','IncidenciasController@create')->name('incidencias.create');
Route::post('/incidencias/crear', 'IncidenciasController@store');
Route::get('/incidencias/editar/{id}', 'IncidenciasController@editar')->name('incidencias.editar');
Route::post('/incidencias/update/{id?}', 'IncidenciasController@update')->name('incidencias.update');
Route::get('/incidencias/{horario}', 'IncidenciasController@show')
->where('incidencia', '\w+')
->name('incidencias.show');

Route::get('/expedientes','ExpedientesController@index')->name('expedientes');
Route::get('/expedientes/nuevo/{id}','ExpedientesController@create')->name('expedientes.create');
Route::post('/expedientes/crear', 'ExpedientesController@store');
Route::get('/expedientes/editar/{id}', 'ExpedientesController@editar')->name('expedientes.editar');
Route::post('/expedientes/update/{id?}', 'ExpedientesController@update')->name('expedientes.update');
Route::get('/expedientes/{expediente}', 'ExpedientesController@show')
->where('expediente', '\w+')
->name('expedientes.show');

