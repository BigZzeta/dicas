@extends('inicio')

@section('content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Expediente</h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-lg-12 col-xl-12 border-left">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>ID Expediente</label>
                                        <input class="form-control" name="idexpediente" type="text" value="{{ $expedientes->idexpediente }} " readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>ID Empleado</label>
                                    <input class="form-control" name="empleado_idempleado" type="text" value="{{ $expedientes->empleados_idempleado }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Solicitud de Empleo</label>
                                    <input class="form-control" name="solicitudempleo" type="text" value="{{ $expedientes->solicitudempleo }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Curriculum</label>
                                    <input class="form-control" name="curriculum" type="text" value="{{ $expedientes->curriculum }} " readonly />
                                  </div>
                                </div>
                            </div>

                            <div class="box-body">
                              <div class="form-group">
                                <label>Acta de nacimiento:</label>
                                <a class="fa fa-file-word-o" href="../../cartatecnica/doc/{{ $expedientes->actanacimiento }}">Descargar</a>
                              </div>
                            </div>

                        </div>
                      </div>
                      <!-- inician botones -->
                      <div class="row">
                        <div class="col-lg-8">
                          <div>
                            <p align="right">
                              <a href="{{ url('/expedientes') }}" class="btn btn-primary">Volver</a>
                              <a href="{{ route('expedientes.editar', ['id' => $expedientes->idpuesto]) }}" class="btn btn-primary">Editar</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- finalizan botones -->
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
