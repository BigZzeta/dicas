@extends('inicio')

@section('content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Pagadora</h3>
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
                                        <label>Num. Pagadora</label>
                                        <input class="form-control" name="idpagadora" type="text" value="{{ $pagadoras->idpagadora }} " readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" name="nombre" type="text" value="{{ $pagadoras->nombre }} " readonly />
                                  </div>
                                </div>
                            </div>
                            <!-- direccion -->
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label>Direccion</label>
                                    <input class="form-control" name="direccion" type="text" value="{{ $pagadoras->direccion }} " readonly />
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
                              <a href="{{ url('/pagadora') }}" class="btn btn-primary">Volver</a>
                              <a href="{{ route('pagadoras.editar', ['id' => $pagadoras->idpagadora]) }}" class="btn btn-primary">Editar</a>
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
