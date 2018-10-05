@extends('inicio')

@section('content')

@include('errors.error')

<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Subir su Expediente Electrónico</h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('expedientes/crear') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                          <!-- Main content -->
                        <section class="content">
                            <div class="row">
                              <div class="col-md-8">
                                <div class="box box-info">

                                  <!--empleado_idempleado -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <!-- <label>ID Empleado:</label> -->
                                      <input type="hidden" class="form-control my-colorpicker1" name="empleado_idempleado" id="empleado_idempleado" value="{{ $empleado_idempleado=$id }}" >
                                      @if ($errors->has('empleado_idempleado'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('empleado_idempleado') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!--solicitud de empleo -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Solicitud de Empleo:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="solicitudempleo" id="solicitudempleo" value="{{ old('solicitudempleo') }}" >
                                      @if ($errors->has('solicitudempleo'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('solicitudempleo') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!--curriculum -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Curriculum:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="curriculum" id="curriculum" value="{{ old('curriculum') }}" >
                                      @if ($errors->has('curriculum'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('curriculum') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!--acta de nacimiento -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Acta de nacimiento:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="actanacimiento" id="actanacimiento" value="{{ old('actanacimiento') }}" >
                                      @if ($errors->has('actanacimiento'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('actanacimiento') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!--comprobante de domicilio -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Comrpobante de Domicilio:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="comprobantedomicilio" id="comprobantedomicilio" value="{{ old('comprobantedomicilio') }}" >
                                      @if ($errors->has('comprobantedomicilio'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('comprobantedomicilio') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Foto deldomicilio -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Foto del domicilio:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="fotodomicilio" id="fotodomicilio" value="{{ old('fotodomicilio') }}" >
                                      @if ($errors->has('fotodomicilio'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('fotodomicilio') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- croquis del domicilio -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Croquis del domicilio:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="croquisdomicilio" id="croquisdomicilio" value="{{ old('croquisdomicilio') }}" >
                                      @if ($errors->has('croquisdomicilio'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('croquisdomicilio') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Documento de identificacion oficial -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Documento de identificacion oficial:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="ife" id="ife" value="{{ old('ife') }}" >
                                      @if ($errors->has('ife'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('ife') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Carta de recomendacion 1-->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta de recomendacion 1:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="cartarecomendacion1" id="cartarecomendacion1" value="{{ old('cartarecomendacion1') }}" >
                                      @if ($errors->has('cartarecomendacion1'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartarecomendacion1') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Carta de recomendacion 2-->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta de recomendacion 2:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="cartarecomendacion2" id="cartarecomendacion2" value="{{ old('cartarecomendacion2') }}" >
                                      @if ($errors->has('cartarecomendacion2'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartarecomendacion2') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Carta de recomendacion 3-->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta de recomendacion 3:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="cartarecomendacion3" id="cartarecomendacion3" value="{{ old('cartarecomendacion3') }}" >
                                      @if ($errors->has('cartarecomendacion3'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartarecomendacion3') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Carta de afiliacion al imss-->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta de afiliacion al imss:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="cartaafiliacionimss" id="cartaafiliacionimss" value="{{ old('cartaafiliacionimss') }}" >
                                      @if ($errors->has('cartaafiliacionimss'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartaafiliacionimss') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Curp -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Curp:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="curp" id="curp" value="{{ old('curp') }}" >
                                      @if ($errors->has('curp'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('curp') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- carta "no presentacion de isr" -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta ISR:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="cartaisr" id="curp" value="{{ old('cartaisr') }}" >
                                      @if ($errors->has('cartaisr'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartaisr') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- carta de retencion infonavit o no infonavit -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta Infonavit:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="cartainfonavit" id="cartainfonavit" value="{{ old('cartainfonavit') }}" >
                                      @if ($errors->has('cartainfonavit'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartainfonavit') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Antecedentes no penales -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Carta Antecedentes No Penales:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="antecedentesnopenales" id="antecedentesnopenales" value="{{ old('antecedentesnopenales') }}" >
                                      @if ($errors->has('cartainfonavit'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('cartainfonavit') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!-- Constancia del RFC -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Constancia del RFC:</label>
                                      <input type="file" class="form-control my-colorpicker1" name="rfc" id="rfc" value="{{ old('rfc') }}" >
                                      @if ($errors->has('rfc'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('rfc') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>

                                  <!--Observaciones -->
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label>Observaciones:</label>
                                      <div class="form-row">
                                        <div class="col">
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observaciones">{{ old('observaciones') }}</textarea>
                                        </div>
                                      </div>
                                      @if ($errors->has('observaciones'))
                                        <div class="text-danger">
                                          <p>{{ $errors->first('observaciones') }}</p>
                                        </div>
                                      @endif
                                    </div>
                                  </div>
                                  <!-- $table->string('campoextra1')->nullable();
                                  $table->string('campoextra2')->nullable(); -->

                                </div>
                              </div>

                              <div class="col-md-8">
                                <p align="right">
                                  <a href="{{ url('/expedientes') }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
                                  <button type="submit" href="{{ url('/expedientes') }}" class="btn btn-primary btn-sm ml-auto">Guardar</button>
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
