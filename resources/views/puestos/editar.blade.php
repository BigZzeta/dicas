@extends('inicio')
@section('title',"Editar Puesto")

@section('content')

@include('errors.error')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Editar Puesto
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
                    <form class="form-grup" method="POST" action="{{ url('puestos/update').'/'.$puestos->idpuesto }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <!--Numero del puesto -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group" col-md-8>
                        <label>Numero de puesto:</label>
                        <input type="number" class="form-control my-colorpicker1" name="numeropuesto" id="numeropuesto" placeholder="Numero de puesto" value="{{ old('numeropuesto', $puestos->numeropuesto) }}" >
                        @if ($errors->has('numeropuesto'))
                          <div class="text-danger">
                            <p>{{ $errors->first('numeropuesto') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!--Nombre del puesto-->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control my-colorpicker1" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre', $puestos->nombre) }}" required>
                        @if ($errors->has('nombre'))
                          <div class="text-danger">
                            <p>{{ $errors->first('nombre') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!--funciones del puesto -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Funciones:</label>
                        <input type="text" class="form-control my-colorpicker1" name="funciones" id="funciones" placeholder="Funciones del puesto" value="{{ old('funciones', $puestos->funciones) }}" >
                        @if ($errors->has('funciones'))
                          <div class="text-danger">
                            <p>{{ $errors->first('funciones') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!-- nivel estructural -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Nivel Estructural:</label>
                        <input type="text" class="form-control my-colorpicker1" name="nivelestructural" id="nivelestructural" placeholder="Nivel en la estructura del organigrama" value="{{ old('nivelestructural', $puestos->nivelestructural) }}" >
                        @if ($errors->has('nivelestructural'))
                          <div class="text-danger">
                            <p>{{ $errors->first('nivelestructural') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!-- carta técnica -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Carta Técnica:</label>
                        <input type="text" class="form-control my-colorpicker1" name="cartatecnica" id="cartatecnica" value="{{ old('cartatecnica', $puestos->cartatecnica) }}" >
                        @if ($errors->has('cartatecnica'))
                          <div class="text-danger">
                            <p>{{ $errors->first('cartatecnica') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!-- estatus del puesto -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Estatus del puesto:</label>
                        <input type="text" class="form-control my-colorpicker1" name="estatus" id="estatus" placeholder="Estatus del puesto" value="{{ old('estatus', $puestos->estatus) }}" >
                        @if ($errors->has('estatus'))
                          <div class="text-danger">
                            <p>{{ $errors->first('estatus') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!-- sueldo minimo -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Sueldo Mínimo:</label>
                        <input type="text" class="form-control my-colorpicker1" name="sueldominimo" id="sueldominimo" placeholder="Sueldo mínimo del puesto" value="{{ old('sueldominimo', $puestos->sueldominimo) }}" >
                        @if ($errors->has('sueldominimo'))
                          <div class="text-danger">
                            <p>{{ $errors->first('sueldominimo') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <!-- sueldo maximo -->
                    <div class="box-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Sueldo Máximo:</label>
                        <input type="text" class="form-control my-colorpicker1" name="sueldomaximo" id="sueldomaximo" placeholder="Sueldo máximo del puesto" value="{{ old('sueldomaximo', $puestos->sueldomaximo) }}" >
                        @if ($errors->has('sueldomaximo'))
                          <div class="text-danger">
                            <p>{{ $errors->first('sueldomaximo') }}</p>
                          </div>
                        @endif
                      </div>
                      <!-- /.form group -->
                    </div>

                    <div class="col-md-">
                      <p align="right">
                        <!--<button type="submit">Guardar usuario</button>-->
                        <a href="{{ url("puestos/{$puestos->idpuestos}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
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
