@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Pagadora {{ $pagadoras->idpagadora }}</h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('pagadora/update').'/'.$pagadoras->idpagadora }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <!--Nombre del pagadora -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Num. Pagadora:</label>
                            <input type="text" class="form-control" name="idpagadora" id="id" placeholder="num" value="{{ old('idpagadora', $pagadoras->idpagadora) }}" required/>
                            @if ($errors->has('idpagadora'))
                              <div class="text-danger">
                                <p>{{ $errors->first('idpagadora') }}</p>
                              </div>
                            @endif
                          </div>
                      </div>
                    </div>

                      <!--Nombre del pagadora -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre', $pagadoras->nombre) }}" required/>
                            @if ($errors->has('nombre'))
                              <div class="text-danger">
                                <p>{{ $errors->first('nombre') }}</p>
                              </div>
                            @endif
                          </div>
                      </div>
                    </div>

                    <!--direccion -->
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Dirección:</label>
                          <input type="text" class="form-control" name="direccion" id="direccion" placeholder="direccion" value="{{ old('direccion', $pagadoras->direccion) }}" required/>
                          @if ($errors->has('direccion'))
                            <div class="text-danger">
                              <p>{{ $errors->first('direccion') }}</p>
                            </div>
                          @endif
                        </div>
                    </div>
                  </div>

                  <br>
                  <div class="row">
                    <div class="col-md-8">
                      <p align="right">
                        <!--<button type="submit">Guardar usuario</button>-->
                        <a href="{{ url("pagadora/{$pagadoras->idpagadora}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
                        <button type="submit" class="btn btn-primary btn-sm ml-auto" >Actualizar</button>
                      </p>
                    </div>
                  </div>

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
