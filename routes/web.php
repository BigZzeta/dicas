<?php

//aqui voy a empezar
// Route::get('/', function(){
//   return view('contenido/dashboard');
// });

//en el futo eliminar oe ditar esta linea
//aqui debe ir la vista de inicio o generica para todos, usuarios como invitados
Route::get('/', 'usuario\UserController@index')
  ->name('users');


Route::get('/loginx', function(){
  return view('login');
});

Route::get('/usuarios', 'usuario\UserController@index')
  ->name('users');

Route::get('/usuarios/nuevo', 'usuario\UserController@create')
  ->name('users.create');

Route::post('/usuarios/crear','usuario\UserController@store');

Route::get('/usuarios/{user}', 'usuario\UserController@show')
  ->where('user', '\w+')
  ->name('users.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
