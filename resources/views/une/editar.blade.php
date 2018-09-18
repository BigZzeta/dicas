@extends('inicio')

@section('content')

@include('errors.error')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Editar UNE
                        <!-- <a href="{{ url('/puestos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a> -->
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('une/update').'/'.$unes->idune }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <!--Numero de la UNE -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group" col-md-8>
                        <label>Numero de UNE:</label>
                        <input type="number" class="form-control my-colorpicker1" name="numeroune" id="numeroune" placeholder="Numero de UNE" value="{{ old('numeroune', $unes->numeroune) }}" >
                        @if ($errors->has('numeroune'))
                          <div class="text-danger">
                            <p>{{ $errors->first('numeroune') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!--Nombre de la UNE -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control my-colorpicker1" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre', $unes->nombre) }}" required>
                        @if ($errors->has('nombre'))
                          <div class="text-danger">
                            <p>{{ $errors->first('nombre') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!--Direccion de la UNE -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Dirección:</label>
                        <input type="text" class="form-control my-colorpicker1" name="direccion" id="direccion" placeholder="Direccion de la UNE" value="{{ old('direccion', $unes->direccion) }}" >
                        @if ($errors->has('direccion'))
                          <div class="text-danger">
                            <p>{{ $errors->first('direccion') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!-- Total de Puestos de  la UNE -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Total de Puestos:</label>
                        <input type="number" class="form-control my-colorpicker1" name="inventariopuestos" id="inventariopuestos" placeholder="Total de puestos de la une" value="{{ old('inventariopuestos', $unes->inventariopuestos) }}" >
                        @if ($errors->has('inventariopuestos'))
                          <div class="text-danger">
                            <p>{{ $errors->first('inventariopuestos') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!-- Estatus de la UNE -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Estatus:</label>
                        <input type="text" class="form-control my-colorpicker1" name="estatus" id="estatus" value="{{ old('estatus', $unes->estatus) }}" >
                        @if ($errors->has('estatus'))
                          <div class="text-danger">
                            <p>{{ $errors->first('estatus') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <div class="col-md-">
                      <p align="right">
                        <!--<button type="submit">Guardar usuario</button>-->
                        <a href="{{ url("une/{$unes->idune}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
                        <button type="submit" class="btn btn-primary btn-sm ml-auto" >Actualizar</button>
                      </p>
                    </div>

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
