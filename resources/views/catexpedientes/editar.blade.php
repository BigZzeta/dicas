@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Documento</h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('catexpedientes/update').'/'.$catexpedientes->idcatexpediente }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <!--idExpediente -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Numero</label>
                              <input type="number" class="form-control" name="numero" id="numero" value="{{ old('numero', $catexpedientes->numero) }}" required/>
                              @if ($errors->has('numero'))
                                <div class="text-danger">
                                  <p>{{ $errors->first('numero') }}</p>
                                </div>
                              @endif
                            </div>
                          </div>
                      </div>
                      <!--nombre del documento -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Nombre del documento</label>
                              <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $catexpedientes->nombre) }}" required/>
                              @if ($errors->has('nombre'))
                                <div class="text-danger">
                                  <p>{{ $errors->first('nombre') }}</p>
                                </div>
                              @endif
                            </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-8">
                            <label class="form-control-label" ><i class="text-danger">*</i> Estatus:</label>
                            <select name="estatus" class="form-control" readonly >
                              @if($catexpedientes->estatus==1)
                                <option value="1" selected>Requerido</option>
                                <option value="0" >No requerido</option>
                              @elseif($catexpedientes->estatus==0)
                                <option value="1" >Requerido</option>
                                <option value="0" selected>No requerido</option>
                                @endif
                            </select>
                        </div>
                      </div>

                  <br>
                  <div class="row">
                    <div class="col-md-8">
                      <p align="right">
                        <!-- <a href="{{ url("catexpedientes/{$catexpedientes->idcatexpediente}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a> -->
                        <a href="{{ url("catexpedientes") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
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
