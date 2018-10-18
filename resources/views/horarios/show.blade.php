@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Horario {{ $horarios->nombre }}
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
                                        <label>Num. Horario</label>
                                        <input class="form-control" name="idhorario" type="text" value="{{ $horarios->idhorario }} " readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" name="nombre" type="text" value="{{ $horarios->nombre }} " readonly />
                                  </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label>Descripcion</label>
                                    <input class="form-control" name="descripcion" type="text" value="{{ $horarios->descripcion }} " readonly />
                                  </div>
                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <!-- <label>Funciones</label> -->
                                    <div class="form-row">
                                      <div class="col">
                                        <label for="exampleFormControlTextarea1">Descripcion</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $horarios->descripcion }}</textarea>
                                      </div>
                                    </div>
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
                              <a href="{{ url('/horarios') }}" class="btn btn-primary">Volver</a>
                              <a href="{{ route('horarios.editar', ['id' => $horarios->idhorario]) }}" class="btn btn-primary">Editar</a>
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
