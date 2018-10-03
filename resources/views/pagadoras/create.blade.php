@extends('inicio')

@section('content')

@include('errors.error')

<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Pagadora
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('pagadora/crear') }}" enctype="multipart/form-data">
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
                                      <label>Nombre:</label>
                                      <input type="text" class="form-control my-colorpicker1" name="nombre" id="nombre" placeholder="nombre" value="{{ old('nombre') }}" >
                                      @if ($errors->has('nombre'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('nombre') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!--Dirección -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Dirección:</label>
                                      <div class="form-row">
                                        <div class="col">
                                          <input type="text" class="form-control my-colorpicker1" name="direccion" placeholder="Direccion">{{ old('direccion') }}</textarea>
                                        </div>
                                      </div>
                                      @if ($errors->has('direccion'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('direccion') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col-md-8">
                                <p align="right">
                                  <a href="{{ url('/pagadoras') }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
                                  <button type="submit" href="{{ url('/pagadoras') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
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
