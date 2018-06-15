@extends('layout')

@section('title',"Crear usuario")

@section('content')
  <h1>Crear usuario</h1>

  <form method="POST" action="{{ url('usuarios/crear') }}">
    {!! csrf_field() !!}

    <label for="name">Nombre:</label>
    <input type="text" name="nombre" id="name">

    <label for="apellidoPaterno">apellido Paterno:</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno">

    <label for="apellidoMaterno">Apellido Materno:</label>
    <input type="text" name="apellidoMaterno">
    <input type="email" email="email">
    <input type="text" name="unername" value="nombre de usuario">
    <input type="password" name="password" value="********">


    <button type=submit>Enviar usuario</button>
  </form>


  <p>
    <!--<a href={{ action('UserController@index') }}>Volver al listado de usuarios</a>-->
    <a href={{ route('users') }}>Regresar al listado de usuarios</a>
  </p>

@endsection
