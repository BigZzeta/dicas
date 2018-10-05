@extends('inicio')

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
                    <form class="form-grup" method="POST" action="{{ url('puestos/update').'/'.$puestos->idpuesto }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <!--Numero del puesto -->
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Numero de puesto</label>
                              <input type="number" class="form-control" name="numeropuesto" id="numeropuesto" value="{{ old('numeropuesto', $puestos->numeropuesto) }}" required/>
                              @if ($errors->has('numeropuesto'))
                                <div class="text-danger">
                                  <p>{{ $errors->first('numeropuesto') }}</p>
                                </div>
                              @endif
                            </div>
                          </div>
                      </div>

                      <!--Nombre del puesto-->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre', $puestos->nombre) }}" required/>
                            @if ($errors->has('nombre'))
                              <div class="text-danger">
                                <p>{{ $errors->first('nombre') }}</p>
                              </div>
                            @endif
                          </div>
                      </div>
                    </div>

                      <!--Funciones -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Funciones del puesto:</label>
                            <div class="form-row">
                              <div class="col">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="funciones" placeholder="Actividades a realizar por el colaborador">{{ old('funciones', $puestos->funciones) }}</textarea>
                              </div>
                            </div>
                            @if ($errors->has('funciones'))
                              <div class="text-danger">
                                <p>{{ $errors->first('funciones') }}</p>
                              </div>
                            @endif
                          </div>
                        </div>
                      </div>

                      <!-- nivel estructural -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                          <label>Nivel Estructural:</label>
                          <input type="text" class="form-control my-colorpicker1" name="nivelestructural" id="nivelestructural" placeholder="Nivel en la estructura del organigrama" value="{{ old('nivelestructural', $puestos->nivelestructural) }}" >
                          @if ($errors->has('nivelestructural'))
                            <div class="text-danger">
                              <p>{{ $errors->first('nivelestructural') }}</p>
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>

                      <!-- carta técnica -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                          <label>Nivel Estructural:</label>
                          <input type="file" class="form-control my-colorpicker1" id="cartatecnica" multiple="multiple" name="cartatecnica" placeholder="cartatecnica" value="{{ old('cartatecnica') }}">
                          <!-- <input type="file" name="cartatecnica" value="{{ old('cartatecnica') }}"> -->
                          @if ($errors->has('cartatecnica'))
                            <div class="text-danger">
                              <p>{{ $errors->first('cartatecnica') }}</p>
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>

                      <!-- sueldo minimo -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                          <label>Sueldo Mínimo:</label>
                          <input type="text" class="form-control my-colorpicker1" name="sueldominimo" id="sueldominimo" placeholder="Sueldo mínimo del puesto" value="{{ old('sueldominimo', $puestos->sueldominimo) }}" >
                          @if ($errors->has('sueldominimo'))
                            <div class="text-danger">
                              <p>{{ $errors->first('sueldominimo') }}</p>
                            </div>
                          @endif
                        </div>
                        <!-- /.form group -->
                      </div>
                    </div>

                      <!-- sueldo maximo -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                          <label>Sueldo Máximo:</label>
                          <input type="text" class="form-control my-colorpicker1" name="sueldomaximo" id="sueldomaximo" placeholder="Sueldo máximo del puesto" value="{{ old('sueldomaximo', $puestos->sueldomaximo) }}" >
                          @if ($errors->has('sueldomaximo'))
                            <div class="text-danger">
                              <p>{{ $errors->first('sueldomaximo') }}</p>
                            </div>
                          @endif
                        </div>
                        <!-- /.form group -->
                      </div>
                    </div>

                    <!-- estatus del puesto -->
                    <!-- <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                        <label>Estatus del puesto:</label>
                        <input type="text" class="form-control my-colorpicker1" name="estatus" id="estatus" placeholder="Estatus del puesto" value="{{ old('estatus', $puestos->estatus) }}" >
                        @if ($errors->has('estatus'))
                          <div class="text-danger">
                            <p>{{ $errors->first('estatus') }}</p>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-md-8">
                        <label class="form-control-label" ><i class="text-danger">*</i> Estatus:</label>
                        <select name="estatus" class="form-control" readonly >
                            <option selected="selected"> {{ $puestos->estatus }} </option>
                              @if ($puestos->estatus === 'Activo')
                                <option value="0" {{old('estatus', $puestos->estatus)=='Inactivo' ? 'selected' : ''}} >Inactivo</option>
                              @elseif ($puestos->estatus === 'Inactivo')
                                <option value="1" {{old('estatus', $puestos->estatus)=='Activo' ? 'selected' : ''}}>Activo</option>
                              @endif
                        </select>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-8">
                      <p align="right">
                        <!--<button type="submit">Guardar usuario</button>-->
                        <a href="{{ url("puestos/{$puestos->idpuestos}") }}" class="btn btn-primary btn-sm ml-auto">Volver</a>
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
