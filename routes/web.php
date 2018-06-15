<?php

//aqui voy a empezar
Route::get('/usuarios', 'UserController@index')
  ->name('users');

Route::get('/usuarios/nuevo', 'UserController@create')
  ->name('users.create');

Route::post('/usuarios/crear','UserController@store');

Route::get('/usuarios/{user}', 'UserController@show')
  ->where('user', '\w+')
  ->name('users.show');



//demas código
/*
Route::get('/', function () {
    return view('contenido/contenido');
    //return "hola";
});
*/
Route::get('/', function () {

    return view('principal');

});
