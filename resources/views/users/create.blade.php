@extends('inicio')

<!--@section('title',"Crear usuario")-->

@section('content')
  <h2>Alta de Nuevo Usuario</h2>

  @include('errors.error')

  <form class="form-grup" method="POST" action="{{ url('usuarios/crear') }}" enctype="multipart/form-data">
    <!--{!! csrf_field() !!}-->

    {{ csrf_field() }}

        <!-- Main content -->
        <section class="content">

          <!-- botones guardar y volver a usuarios-->
          <div class="col-md-8">
            <p align="right">
              <!--<button type="submit">Guardar usuario</button>-->
              <a href="{{ url('/usuarios') }}" class="btn btn-primary btn-sm ml-auto">Volver listado de usuarios</a>
              <button type="submit" href="{{ url('/usuarios') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
            </p>
          </div>

          <!--</div>-->

          <div class="row">
            <div class="col-md-8">
              <div class="box box-info">

                <!--Nombre -->
                <div class="box-body">
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control my-colorpicker1" name="name" id="name" placeholder="Nombre" value="{{ old('name') }}" >
                    @if ($errors->has('name'))
                      <div class="text-danger">
                        <p>{{ $errors->first('name') }}</p>
                      </div>
                    @endif
                  </div>
                  <!-- /.form group -->
                </div>
                <!--Apellido Paterno -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Apellido Paterno:</label>
                    <input type="text" class="form-control my-colorpicker1" name="apellidoPaterno" placeholder="Apellido Paterno" value="{{ old('apellidoPaterno') }}" >
                  </div>
                </div>
                <!--Apellido Materno -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Apellido Materno:</label>
                    <input type="text" class="form-control my-colorpicker1" name="apellidoMaterno" placeholder="Apellido Materno" value="{{ old('apellidoMaterno') }}" >
                  </div>
                </div>
                <!--foto -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Foto:</label>
                    <!-- <input type="file" class="form-control my-colorpicker1" id="filer_example2" multiple="multiple" name="foto" placeholder="foto" value="{{ old('foto') }}"> -->
                    <input type="file" name="foto" value="{{ old('foto') }}">
                  </div>
                </div>
                <!--email -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control my-colorpicker1" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" >
                    @if ($errors->has('email'))
                      <div class="text-danger">
                        <p>{{ $errors->first('email') }}</p>
                      </div>
                    @endif
                  </div>
                </div>
                <!--Nombre de Usuario -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Nombre de Usuario:</label>
                    <input type="text" class="form-control my-colorpicker1" name="username" placeholder="Nombre de usuario" value="{{ old('username') }}" >
                    @if ($errors->has('username'))
                      <div class="text-danger">
                        <p>{{ $errors->first('username') }}</p>
                      </div>
                    @endif
                  </div>
                </div>

                <!--Contarseña -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control my-colorpicker1" name="password" placeholder="Contraseña" value"{{ old('password') }}" >
                    @if ($errors->has('password'))
                      <div class="text-danger">
                        <p>{{ $errors->first('password') }}</p>
                      </div>
                    @endif
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <div class="col-md-8">
              <p align="right">
                <!--<button type="submit">Guardar usuario</button>-->
                <a href="{{ url('/usuarios') }}" class="btn btn-primary btn-sm ml-auto">Volver listado de usuarios</a>
                <button type="submit" href="{{ url('/usuarios') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
              </p>
            </div>

          </div>
          <!-- /.row -->
      </section>
      <!-- botones guardar y volver a usuarios-->
  </form>

@endsection
