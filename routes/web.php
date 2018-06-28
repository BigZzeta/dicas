<?php


Route::get('/', 'usuario\UserController@index')
  ->name('users');

Route::get('/dashboard', function(){
  return view('contenido/dashboard');
});

//probar esta ruta para el login
Route::get('/loginx', function(){
  return view('login');
});

Route::get('/usuarios', 'usuario\UserController@index')
  ->name('users');

Route::get('/usuarios/nuevo', 'usuario\UserController@create')
  ->name('users.create');

Route::post('/usuarios/crear','usuario\UserController@store');

Route::get('/usuarios/editar', 'usuario\UserController@editar')
  ->name('users.editar');

// Route::post('/usuarios/crear','usuario\UserController@store');


Route::get('/usuarios/{user}', 'usuario\UserController@show')
  ->where('user', '\w+')
  ->name('users.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
