@extends('inicio')
@section('title',"Mostrando departamento")
@section('content')
<!-- Start content -->
<div class="content">

    <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Departamento</h1>
                        <ol class="breadcrumb float-right">
                            <!-- <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Profile</li> -->
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-header">
                      <h3><i class="fa fa-user"></i> Detalle</h3>
                  </div>

                  <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">

                      <div class="row">
                        <div class="col-lg-12 col-xl-12 border-left">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Numero Departamento</label>
                                        <input class="form-control" name="numerodepartamento" type="text" value="{{ $departamentos->numerodepartamento }} " readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" name="nombre" type="text" value="{{ $departamentos->nombre }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label>Total de Empleados</label>
                                    <input class="form-control" name="numempleados" type="text" value="{{ $departamentos->numempleados }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Estatus</label>
                                    <input class="form-control" name="estatus" type="text" value="{{ $departamentos->estatus }} " readonly />
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- inician botones -->
                      <div class="row">
                        <div class="col-lg-6">
                          <div>
                            <p align="right">
                              <a href="{{ url('/departamentos') }}" class="btn btn-primary">Volver</a>
                              <a href="{{ route('departamentos.editar', ['id' => $departamentos->iddepartamento]) }}" class="btn btn-primary">Editar</a>
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
