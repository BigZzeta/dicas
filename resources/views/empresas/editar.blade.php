@extends('inicio')

@section('content')

@include('errors.error')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Editar Empresa
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
                    <form class="form-grup" method="POST" action="{{ url('empresas/update').'/'.$empresas->idempresa }}" enctype="multipart/form-data">

                      {{ csrf_field() }}

                          <!-- Main content -->
                          <section class="content">

                            <div class="row">
                              <div class="col-md-8">
                                <div class="box box-info">

                                  <!--Nombre de la empresa -->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Nombre:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="nombre" id="nombre" placeholder="Nombre de la empresa" value="{{ old('nombre', $empresas->nombre) }}" >
                                      @if ($errors->has('nombre'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('nombre') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>

                                  <!--Direccion de la empresa-->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Dirección:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="direccion" id="direccion" placeholder="direccion" value="{{ old('direccion', $empresas->direccion) }}" >
                                      @if ($errors->has('direccion'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('direccion') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>

                                  <!--Colonia -->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Colonia:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="colonia" id="colonia" placeholder="colonia" value="{{ old('colonia', $empresas->colonia) }}" >
                                      @if ($errors->has('colonia'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('colonia') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>

                                  <!-- Codigo postal -->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Codigo postal:</label>
                                      <input type="number" class="form-control my-colorpicker1" name="codigopostal" id="codigopostal" placeholder="codigo postal" value="{{ old('codigopostal', $empresas->codigopostal) }}" >
                                      @if ($errors->has('codigopostal'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('codigopostal') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>

                                  <!-- Telefono 1 -->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Telefono 1:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="telefono1" id="telefono1" placeholder="telefono 1" value="{{ old('telefono1', $empresas->telefono1) }}" >
                                      @if ($errors->has('telefono1'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('telefono1') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>

                                  <!-- Telefono 2 -->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Telefono 2:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="telefono2" id="telefono2" placeholder="telefono 2" value="{{ old('telefono2', $empresas->telefono2) }}" >
                                      @if ($errors->has('telefono2'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('telefono2') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>

                                  <!-- Siglas -->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Siglas:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="siglas" id="siglas" placeholder="siglas o iniciales del negocio" value="{{ old('siglas', $empresas->siglas) }}" >
                                      @if ($errors->has('siglas'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('siglas') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>

                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div>

                              <div class="col-md-8">
                                <p align="right">
                                  <!--<button type="submit">Guardar usuario</button>-->
                                  <a href="{{ url("empresa") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>

                                  <button type="submit" class="btn btn-primary btn-sm ml-auto" >Actualizar</button>
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
