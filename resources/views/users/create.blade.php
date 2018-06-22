@extends('home')

<!--@section('title',"Crear usuario")-->

@section('content')
  <h2>Alta de Nuevo Usuario</h2>

  @include('errors.error')

  <form class="form-grup" method="POST" action="{{ url('usuarios/crear') }}">
    <!--{!! csrf_field() !!}-->

    {{ csrf_field() }}

    </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <div class="box box-info">

                <!--Nombre -->
                <div class="box-body">
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control my-colorpicker1" name="name" id="name" placeholder="Nombre" value="{{ old('name') }}">
                  </div>
                  <!-- /.form group -->
                </div>
                <!--Apellido Paterno -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Apellido Paterno:</label>
                    <input type="text" class="form-control my-colorpicker1" name="apellidoPaterno" placeholder="Apellido Paterno" value="{{ old('apellidoPaterno') }}">
                  </div>
                </div>
                <!--Apellido Paterno -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Apellido Materno:</label>
                    <input type="text" class="form-control my-colorpicker1" name="apellidoMaterno" placeholder="Apellido Materno" value="{{ old('apellidoMaterno') }}">
                  </div>
                </div>
                <!--email -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control my-colorpicker1" name="email" placeholder="Correo Electronico" value="{{ old('email') }}">
                  </div>
                </div>
                <!--Nombre de Usuario -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Nombre de Usuario:</label>
                    <input type="text" class="form-control my-colorpicker1" name="username" placeholder="Nombre de usuario" value="{{ old('username') }}">
                  </div>
                </div>
                <!--Contarseña -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control my-colorpicker1" name="password" placeholder="Contraseña" value"{{ old('password') }}">
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
