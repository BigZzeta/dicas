@extends('home')

@section('title',"Crear usuario")

@section('content')
  <h1>Crear usuario</h1>

  <form class="form-grup" method="POST" action="{{ url('usuarios/crear') }}">
    <!--{!! csrf_field() !!}-->

    {{ csrf_field() }}

    <!--

    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" placeholder="nombre">
    <br>
    <label for="apellidoPaterno">Apellido Paterno:</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido Paterno">
    <br>
    <label for="apellidoMaterno">Apellido Materno:</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido Materno">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="correo">
    <br>
    <label for="username">Nombre de Usuario:</label>
    <input type="text" name="username" id="username"  placeholder="nombre de usuario">
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" placeholder="********">
  -->

  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><label for="name">Nombre:</label></td>
      <td><input type="text" name="name" id="name" placeholder="nombre"></td

    </tr>
    <tr>
      <th scope="row">2</th>
      <td><label for="apellidoPaterno">Apellido Paterno:</label></td>
      <td><input type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido Paterno"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


    <button type="submit">Enviar usuario</button>
  </form>


  <p>
     <a href="{{ url('/usuarios') }}">Regresar al listado de usuarios</a>
  </p>

@endsection
