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
                        <div class="col-lg-6 col-xl-8 border-left">
                          <div class="form-group">
                            <label class="text-primary"><strong>ID Expediente</strong></label>
                            <input class="form-control" name="idcatexpediente" type="text" value="{{ $expedientes[0]->idcatexpediente }} " readonly />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-xl-8 border-left">
                          <div class="form-group">
                            <label class="text-primary"><strong>Numero</strong></label>
                            <input class="form-control" name="numero" type="text" value="{{ $expedientes[0]->numero }} " readonly />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-xl-8 border-left">
                          <div class="form-group">
                            <label class="text-primary"><strong>Nombre</strong></label>
                            <input class="form-control" name="nombre" type="text" value="{{ $expedientes[0]->nombre }} " readonly />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-xl-8 border-left">
                          <div class="form-group">
                            <label class="text-primary"><strong>Estatus</strong></label>
                            @if($expedientes[0]->estatus==1)
                              <input class="form-control" name="estatus" type="text" value="Requerido" readonly />
                            @else
                              <input class="form-control" name="estatus" type="text" value="No requerido" readonly />
                            @endif
                          </div>
                        </div>
                      </div>

                      <!-- inician botones -->
                      <div class="row">
                        <div class="col-lg-8">
                          <div>
                            <p align="right">
                              <a href="{{ route('catexpedientes',['id' => $expedientes[0]->idcatexpediente]) }}" class="btn btn-primary">Volver</a>
                              <a href="{{ route('catexpedientes.editar', ['id' => $expedientes[0]->idcatexpediente]) }}" class="btn btn-primary">Editar</a>
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
