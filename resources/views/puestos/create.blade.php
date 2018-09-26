@extends('inicio')

@section('content')

@include('errors.error')

<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Puestos
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('puestos/crear') }}" enctype="multipart/form-data">
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
                                      <label>Numero de Puesto:</label>
                                      <input type="number" class="form-control my-colorpicker1" name="numeropuesto" id="numeropuesto" placeholder="Numero de puesto" value="{{ old('numeropuesto') }}" >
                                      @if ($errors->has('numeropuesto'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('numeropuesto') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>
                                  <!--Nombre -->
                                  <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                      <label>Nombre del puesto:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="nombre" id="nombre" placeholder="nombre" value="{{ old('nombre') }}" >
                                      @if ($errors->has('nombre'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('nombre') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                    <!-- /.form group -->
                                  </div>
                                  <!--Funciones -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Funciones del puesto:</label>
                                      <div class="form-row">
                                        <div class="col">
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="funciones" placeholder="Actividades a realizar por el colaborador">{{ old('funciones') }}</textarea>
                                        </div>
                                      </div>
                                      @if ($errors->has('funciones'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('funciones') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>
                                  <!-- Nivel estructural en el organigrama -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Nivel estructural:</label>
                                      <input type="number" class="form-control my-colorpicker1" name="nivelestructural" value="{{ old('nivelestructural') }}" >
                                      @if ($errors->has('nivelestructural'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('nivelestructural') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>
                                  <!-- Carta técnica -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta Técnica:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="cartatecnica" value="{{ old('cartatecnica') }}" >
                                      @if ($errors->has('cartatecnica'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartatecnica') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>
                                  <!-- Sueldo Mínimo -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Sueldo Mínimo:</label>
                                      <input type="number" step="any" class="form-control my-colorpicker1" name="sueldominimo" value="{{ old('sueldominimo') }}" >
                                      @if ($errors->has('sueldominimo'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('sueldominimo') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>
                                  <!-- Sueldo Máximo -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Sueldo Máximo:</label>
                                      <input type="number" step="any" class="form-control my-colorpicker1" name="sueldomaximo" value="{{ old('sueldomaximo') }}" >
                                      @if ($errors->has('sueldomaximo'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('sueldomaximo') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- /.box-body -->
                                </div>
                              </div>

                              <div class="col-md-8">
                                <p align="right">
                                  <a href="{{ url('/puestos') }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
                                  <button type="submit" href="{{ url('/puestos') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
                                </p>
                              </div>
                            </div>
                        </section>
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
