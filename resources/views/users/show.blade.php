@extends('layout')

@section('title',"Usuario {$user->id}")

@section('content')
  <h1>Usuario Id: {{$user->id}}</h1>



  <p>Nombre del Usuario: {{$user->name}} {{$user->apellidoPaterno}} {{$user->apellidoMaterno}}</p>
  <p>Username: {{$user->username}}</p>
  <p>Correo Electrónico: {{$user->email}}</p>

  <p>
    <!--<a href={{ action('UserController@index') }}>Volver al listado de usuarios</a>-->
    <a href={{ route('users') }}>Regresar al listado de usuarios</a>
  </p>

@endsection
