@extends('inicio')

<!--@section('title',"Crear usuario")-->

@section('content')
  <h2>Crear Departamento</h2>

  @include('errors.error')

  <form class="form-grup" method="POST" action="{{ url('departamentos/crear') }}" enctype="multipart/form-data">
    <!--{!! csrf_field() !!}-->

    {{ csrf_field() }}

        <!-- Main content -->
        <section class="content">

          <!-- botones guardar y volver a usuarios-->
          <!-- <div class="col-md-8">
            <p align="right">
              <!- -<button type="submit">Guardar usuario</button>- ->
              <a href="{{ url('/departamentos') }}" class="btn btn-primary btn-sm ml-auto">Volver listado de departamentos</a>
              <button type="submit" href="{{ url('/departamentos') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
            </p>
          </div> -->

          <!--</div>-->

          <div class="row">
            <div class="col-md-8">
              <div class="box box-info">

                <!--Nombre -->
                <div class="box-body">
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Numero Departamento:</label>
                    <input type="number" class="form-control my-colorpicker1" name="numerodepartamento" id="numerodepartamento" placeholder="Numero de departamento" value="{{ old('numerodepartamento') }}" >
                    @if ($errors->has('numerodepartamento'))
                      <div class="text-danger">
                        <p>{{ $errors->first('numerodepartamento') }}</p>
                      </div>
                    @endif
                  </div>
                  <!-- /.form group -->
                </div>

                <!--Nombre -->
                <div class="box-body">
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Nombre departamento:</label>
                    <input type="text" class="form-control my-colorpicker1" name="nombre" id="nombre" value="{{ old('nombre') }}" >
                    @if ($errors->has('nombre'))
                      <div class="text-danger">
                        <p>{{ $errors->first('nombre') }}</p>
                      </div>
                    @endif
                  </div>
                  <!-- /.form group -->
                </div>

                <!-- Numero de Empleados para el departamento -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Numero de colaboradores del Departamento:</label>
                    <input type="number" class="form-control my-colorpicker1" name="numempleados" value="{{ old('numempleados') }}" >


                    @if ($errors->has('numempleados'))
                      <div class="text-danger">
                        <p>{{ $errors->first('numempleados') }}</p>
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
                <a href="{{ url('/departamentos') }}" class="btn btn-primary btn-sm ml-auto">Volver listado de Departamentos</a>
                <button type="submit" href="{{ url('/departamentos') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
              </p>
            </div>

          </div>
          <!-- /.row -->


      </section>
      <!-- botones guardar y volver a usuarios-->

  </form>

@endsection
