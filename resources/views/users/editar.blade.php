@extends('inicio')
@section('title',"Editar usuario")

@section('content')

<div class="content">
  <div class="container-fluid">

  <div class="row">
      <div class="col-xl-12">
          <div class="breadcrumb-holder">
              <h1 class="main-title float-left">Editar usuario</h1>
              <ol class="breadcrumb float-right">
                  <!--<li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active">Profile</li>-->
              </ol>
              <div class="clearfix"></div>
          </div>
      </div>
  </div>

@include('errors.error')


  <form class="form-grup" method="POST" action="{{ url('usuarios/update').'/'.$user->id }}" enctype="multipart/form-data">
    {{ csrf_field() }}

        <!-- Main content -->
        <section class="content">

          <!-- botones guardar y volver a usuarios-->
          <div class="col-md-8">
            <p align="right">
              <!--<button type="submit">Guardar usuario</button>-->
              <a href="{{ url("usuarios/{$user->username}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
              <button type="submit" class="btn btn-primary btn-sm ml-auto" >Actualizar</button>
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
                    <input type="text" class="form-control my-colorpicker1" name="name" id="name" placeholder="Nombre" value="{{ old('name', $user->name) }}" >
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
                    <input type="text" class="form-control my-colorpicker1" name="apellidoPaterno" placeholder="Apellido Paterno" value="{{ old('apellidoPaterno', $user->apellidoPaterno) }}" >
                  </div>
                </div>
                <!--Apellido Materno -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Apellido Materno:</label>
                    <input type="text" class="form-control my-colorpicker1" name="apellidoMaterno" placeholder="Apellido Materno" value="{{ old('apellidoMaterno', $user->apellidoMaterno) }}" >
                  </div>
                </div>


                <!--foto -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Foto:</label>
                      <input type="file" name="foto" accept="image/*" onchange="loadFile(event)"> <!-- el script esta en la pagina principal llamada inicio-->
                      <img id="output" alt="your image" width="100" height="100"/>
                  </div>
                </div>

                <!--email -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control my-colorpicker1" name="email" placeholder="Correo Electronico" value="{{ old('email', $user->email) }}" >
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
                    <input type="text" class="form-control my-colorpicker1" name="username" placeholder="Nombre de usuario" value="{{ old('username', $user->username) }}" >
                    @if ($errors->has('username'))
                      <div class="text-danger">
                        <p>{{ $errors->first('username') }}</p>
                      </div>
                    @endif
                  </div>
                </div>

                <!--Tipo de Usuario -->
                <div class="box-body">
                <label for="inputState">Tipo de Usuario:</label>
                <select id="tipousuario" name="tipousuario" class="form-control" readonly >
                    <option selected="selected"> {{ $user->idTipoUsuario }} </option>
                      @if ($user->idTipoUsuario === 'Administrador')
                        <option value="2" {{old('idTipoUsuario', $user->idTipoUsuario)=='Usuario' ? 'selected' : ''}} >Usuario</option>
                      @elseif ($user->idTipoUsuario === 'Usuario')
                        <option value="1" {{old('idTipoUsuario', $user->idTipoUsuario)=='Administrador' ? 'selected' : ''}}>Administrador</option>
                      @endif
                </select>
                @if ($errors->has('idTipoUsuario'))
                  <div class="text-danger">
                    <p>{{ $errors->first('idTipoUsuario') }}</p>
                  </div>
                @endif
                </div>

                <!--Estatus del Usuario -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Estatus del usuario:</label>
                      <select id="status" name="status" class="form-control" readonly >
                          <option selected="selected"> {{ $user->status }} </option>
                            @if ($user->status === 'Activo')
                              <option value="0" {{old('status', $user->status)=='Inactivo' ? 'selected' : ''}} >Inactivo</option>
                            @elseif ($user->status === 'Inactivo')
                              <option value="1" {{old('status', $user->status)=='Activo' ? 'selected' : ''}}>Activo</option>
                            @endif
                      </select>
                      @if ($errors->has('status'))
                      <div class="text-danger">
                        <p>{{ $errors->first('status') }}</p>
                      </div>
                      @endif
                  </div>
                </div>

                <!--Contraseña -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control my-colorpicker1" name="password" placeholder="Contraseña" value"{{ old('password') }}" >
                  </div>
                </div>

                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>

            <div class="col-md-8">
              <p align="right">
                <!--<button type="submit">Guardar usuario</button>-->
                <a href="{{ url("usuarios/{$user->username}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
                <button type="submit" class="btn btn-primary btn-sm ml-auto" >Actualizar</button>
              </p>
            </div>

          </div>
          <!-- /.row -->


      </section>
      <!-- botones guardar y volver a usuarios-->

  </form>
</div>
</div>
@endsection
