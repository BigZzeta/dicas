@extends('home')

<!--@section('title',"Crear usuario")-->

@section('content')
  <h2>Alta de Nuevo Usuario</h2>

  @include('errors.error')

  <form class="form-grup" method="POST" action="{{ url('usuarios/crear') }}">
    <!--{!! csrf_field() !!}-->

    {{ csrf_field() }}

    <!--
    <section class="content">
      <div class="row">
        <div class="col-md-6">

    <table class="table table-bordered">
      <tbody>
        <tr>
          <td width="20%"><label for="name">Nombre:</label></td>
          <td><input type="text" class="form-control my-colorpicker1" name="name" id="name" placeholder="nombre"></td>
        </tr>
        <tr>
          <td><label for="apellidoPaterno">Apellido Paterno:</label></td>
          <td><input type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido Paterno"></td>
        </tr>
        <tr>
          <td><label for="apellidoMaterno">Apellido Materno:</label></td>
          <td><input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido Materno"></td>
        </tr>
        <tr>
          <td><label for="email">Email:</label></td>
          <td><input type="email" name="email" id="email" placeholder="correo"></td>
        </tr>
        <tr>
          <td><label for="username">Nombre de Usuario:</label></td>
          <td><input type="text" name="username" id="username"  placeholder="nombre de usuario"></td>
        </tr>
        <tr>
          <td><label for="password">Contraseña:</label></td>
          <td><input type="password" name="password" id="password" placeholder="********"></td>
        </tr>
      </tbody>
    </table>

  </div>

</div>-->


    </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="box box-info">

                <!--Nombre -->
                <div class="box-body">
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control my-colorpicker1" name="name" id="name" placeholder="Nombre">
                  </div>
                  <!-- /.form group -->
                </div>
                <!--Apellido Paterno -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Apellido Paterno:</label>
                    <input type="text" class="form-control my-colorpicker1" name="apellidoPaterno" placeholder="Apellido Paterno" required>
                  </div>
                </div>
                <!--Apellido Paterno -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Apellido Materno:</label>
                    <input type="text" class="form-control my-colorpicker1" name="apellidoMaterno" placeholder="Apellido Materno" required>
                  </div>
                </div>
                <!--email -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control my-colorpicker1" name="email" placeholder="Correo Electronico" required>
                  </div>
                </div>
                <!--Nombre de Usuario -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Nombre de Usuario:</label>
                    <input type="text" class="form-control my-colorpicker1" name="username" placeholder="Nombre de usuario" required>
                  </div>
                </div>
                <!--Contarseña -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control my-colorpicker1" name="password" placeholder="Contraseña" required>
                  </div>
                </div>


                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->
      </section>
    <button type="submit">Enviar usuario</button>
  </form>


  <p>
     <a href="{{ url('/usuarios') }}">Regresar al listado de usuarios</a>
  </p>

@endsection
