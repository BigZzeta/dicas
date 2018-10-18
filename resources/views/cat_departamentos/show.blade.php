@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Departamentos
                      <!-- <a href="{{ url('/departamentos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo departamento</a> -->
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <!--contenido aqui -->
                    <form action="#" method="post" enctype="multipart/form-data">

                      <div class="row">
                        <div class="col-lg-12 col-xl-12 border-left">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Numero Departamento</label>
                                        <input class="form-control" name="numerodepartamento" type="text" value="{{ $departamentos->numerodepartamento }} " readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" name="nombre" type="text" value="{{ $departamentos->nombre }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Total de Empleados</label>
                                    <input class="form-control" name="numempleados" type="text" value="{{ $departamentos->numempleados }} " readonly />
                                  </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label>Estatus</label>
                                    @if($departamentos->estatus==1)
                                      <input class="form-control" name="estatus" type="text" value="Activo" readonly />
                                    @else
                                      <input class="form-control" name="estatus" type="text" value="Inactivo" readonly />
                                    @endif

                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- inician botones -->
                      <div class="row">
                        <div class="col-lg-8">
                          <div>
                            <p align="right">
                              <a href="{{ url('/departamentos') }}" class="btn btn-primary">Volver</a>
                              <a href="{{ route('departamentos.editar', ['id' => $departamentos->idcatdepartamento]) }}" class="btn btn-primary">Editar</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- finalizan botones -->
                    </form>
                    <!--contenido aqui -->
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
