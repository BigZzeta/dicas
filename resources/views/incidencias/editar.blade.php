@extends('inicio')

@section('content')

@include('errors.error')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Editar Incidencia
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
                    <form class="form-grup" method="POST" action="{{ url('incidencias/update').'/'.$incidencias->idincidencia }}" enctype="multipart/form-data">

                      {{ csrf_field() }}

                          <!-- Main content -->
                          <section class="content">

                            <div class="row">
                              <div class="col-md-8">
                                <div class="box box-info">

                                  <!--Nombre del departamento-->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Nombre:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre', $incidencias->nombre) }}" >
                                      @if ($errors->has('nombre'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('nombre') }}</p>
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
                                  <a href="{{ url("incidencias/{$incidencias->idincidencia}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>

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
