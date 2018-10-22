@extends('inicio')

@section('content')
<!-- Start content -->
@include('errors.error')

<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Departamentos
                      <!-- <a href="{{ url('/departamentos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a> -->
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('departamentos/crear') }}" enctype="multipart/form-data">
                      <!--{!! csrf_field() !!}-->

                      {{ csrf_field() }}

                          <!-- Main content -->
                          <section class="content">
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

                                  <!-- Numero de puestos del departamento -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Numero de puestos:</label>
                                      <input type="number" class="form-control my-colorpicker1" name="numerodepuestos" value="{{ old('numerodepuestos') }}" >
                                      @if ($errors->has('numerodepuestos'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('numerodepuestos') }}</p>
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
                                  <a href="{{ url('/departamentos') }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
                                  <button type="submit" href="{{ url('/departamentos') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
                                </p>
                              </div>

                            </div>
                            <!-- /.row -->


                        </section>
                        <!-- botones guardar y volver a usuarios-->

                    </form>

                  </div>
                <!-- end card-body -->
              </div>
            <!-- end card -->
          </div>
        </div>
        <!-- end row -->
    </div>
    <!-- END container-fluid -->
</div>
<!-- END content -->

@endsection
