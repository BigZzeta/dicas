@extends('inicio')

@section('content')

@include('errors.error')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card-header">
                  <h3><i class="fa fa-table"></i> Agregar Documento</h3>
                </div>
            </div>
        </div>

            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    <form class="form-grup" method="POST" action="{{ url('expedientes/crear') }}" files="true" enctype="multipart/form-data">
                        {{ csrf_field() }}
                          <!-- Main content -->
                        <section class="content">
                            <h3 class="tex text-primary">
                                Agregue un nuevo documento
                            </h3>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" class="btn-der" align="right">
                              <!-- <input type="submit" name="insertar" value="Guardar" class="btn btn-info"/> -->
                              <button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" class="btn-der" align="right">
                              <table id="tabla" class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th>Tipo Documento</th>
                                    <th>Observaciones</th>
                                    <th>Ruta Archivo</th>
                                    <th>Eliminar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <input type="hidden" required name="empleado_idempleado[]" placeholder="ID Expediente" value="{{ $empleado_idempleado=$id }}"  />
                                <td>
                                  <select name="idcatexpediente[]" required>
                                      <option></option>
                                      @foreach($documentos as $documento)
                                      <option value="{{$documento->idcatexpediente}}" {{ old('nombre')==$documento->idcatexpediente ? 'selected' : ''}} >{{$documento->nombre}}</option>
                                      @endforeach
                                  </select>
                                </td>
                                <!--Funciones -->
                                <td>
                                  <input type="text" name="observaciones[]"/>
                                  @if ($errors->has('observaciones'))
                                    <div class="text-danger">
                                      <p>{{ $errors->first('observaciones') }}</p>
                                    </div>
                                  @endif
                                </td>
                                <td><input type="file" required name="documento[]" placeholder="Documento"/></td>
                                <td class="eliminar"><input type="button"   value="Menos -"/></td>
                              </tr>
                            </tbody>
                            </table>
                          </div>

                            <!-- <div class="btn-der">
                              <input type="submit" name="insertar" value="Guardar" class="btn btn-info"/>
                              <button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>
                            </div> -->

                        </section>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <p align="right">
                            <a href="{{ route('empleados.show',['id' => $id]) }}" class="btn btn-success" style='width:100px; height:33px; margin-left: 5px'>Volver</a>
                            <button type="submit" href="{{ url('/expedientes') }}" class="btn btn-primary btn-sm ml-auto" style='width:100px; height:33px; margin-left: 5px'>Guardar</button>
                          </p>
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
