@extends('inicio')
@section('title',"Mostrando puestos")
@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Puestos</h3>
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
                                        <label>Numero de Puesto</label>
                                        <input class="form-control" name="numeropuesto" type="text" value="{{ $puestos->numeropuesto }} " readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" name="nombre" type="text" value="{{ $puestos->nombre }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <!-- <label>Funciones</label> -->
                                    <div class="form-row">
                                      <div class="col">
                                        <label for="exampleFormControlTextarea1">Funciones</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $puestos->funciones }}</textarea>
                                      </div>
                                    </div>

                                    <!-- <input class="form-control" name="funciones" type="text" value="{{ $puestos->funciones }} " readonly /> -->

                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Nivel Estructural</label>
                                    <input class="form-control" name="nivelestructural" type="text" value="{{ $puestos->nivelestructural }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Carta Técnica</label>
                                    <input class="form-control" name="cartatecnica" type="text" value="{{ $puestos->cartatecnica }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label>Sueldo Mínimo</label>
                                    <input class="form-control" name="sueldominimo" type="text" value="{{ $puestos->sueldominimo }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label>Sueldo Máximo</label>
                                    <input class="form-control" name="sueldomaximo" type="text" value="{{ $puestos->sueldomaximo }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label>Estatus</label>
                                    <input class="form-control" name="estatus" type="text" value="{{ $puestos->estatus }} " readonly />
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
                              <a href="{{ url('/puestos') }}" class="btn btn-primary">Volver</a>
                              <a href="{{ route('puestos.editar', ['id' => $puestos->idpuesto]) }}" class="btn btn-primary">Editar</a>
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
