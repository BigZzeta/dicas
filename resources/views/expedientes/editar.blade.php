@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Expediente {{ $expedientes[0]->nombre }} {{$expedientes[0]->apellidoPaterno}} {{$expedientes[0]->apellidoMaterno}}</h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('expedientes/update').'/'.$expedientes[0]->idexpediente }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <!--idExpediente -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <!-- <label>ID Expediente</label> -->
                              <input type="hidden" class="form-control" name="idexpediente" id="idexpediente" value="{{ old('idexpediente', $expedientes[0]->idexpediente) }}" required readonly/>
                              @if ($errors->has('idexpediente'))
                                <div class="text-danger">
                                  <p>{{ $errors->first('idexpediente') }}</p>
                                </div>
                              @endif
                            </div>
                          </div>
                      </div>
                      <!--idEmpleado -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <!-- <label>ID Empleado</label> -->
                              <input type="hidden" class="form-control" name="idempleado" id="idempleado" value="{{ old('idempleado', $expedientes[0]->idempleado) }}" required readonly/>
                              @if ($errors->has('idempleado'))
                                <div class="text-danger">
                                  <p>{{ $errors->first('idempleado') }}</p>
                                </div>
                              @endif
                            </div>
                          </div>
                      </div>
                      <!--idEmpleado -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <!-- <label>ID Documento</label> -->
                              <input type="hidden" class="form-control" name="idcatexpediente" id="idcatexpediente" value="{{ old('idcatexpediente', $expedientes[0]->idcatexpediente) }}" required readonly/>
                            </div>
                          </div>
                      </div>
                      <!--nombre del documento -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Tipo de Documento</label>
                              <input type="text" class="form-control" name="nombredocumento" id="nombredocumento" value="{{ old('nombredocumento', $expedientes[0]->nombredocumento) }}" required readonly/>
                            </div>
                          </div>
                      </div>
                      <!--nombre del documento -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Observaciones</label>
                              <input type="text" class="form-control" name="observaciones" id="observaciones" value="{{ old('observaciones', $expedientes[0]->observaciones) }}"/>
                            </div>
                          </div>
                      </div>
                      <!--subir el documento -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Seleccione el Documento a subir</label>
                              <input type="file" class="form-control" name="documento" id="documento" value="{{ old('documento', $expedientes[0]->documento) }}" />
                              @if ($errors->has('documento'))
                                <div class="text-danger">
                                  <p>{{ $errors->first('documento') }}</p>
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
                        <a href="{{ url("expedientes/{$expedientes[0]->idempleado}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
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
