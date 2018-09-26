@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Empresa
                      <!-- <a href="{{ url('/empresa/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a> -->
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    @if ($empresas->isNotEmpty())
                    <div class="card-body">
                      <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-hover display">
                        <thead>
                          <tr>
                            <!-- <th>Id</th> -->
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Colonia</th>
                            <th>Código Postal</th>
                            <th>Telefono</th>
                            <th>Telefono</th>
                            <th>Siglas</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($empresas as $empresa)
                        <tr>
                          <!-- <td> {{ $empresa->idempresa }}</td> -->
                          <td>{{ $empresa->nombre}}</td>
                          <td>{{ $empresa->direccion }}</td>
                          <td align="center">{{ $empresa->colonia}}</td>
                          <td>{{ $empresa->codigopostal}}</td>
                          <td>{{$empresa->telefono1}}</td>
                          <td>{{$empresa->telefono2}}</td>
                          <td>{{$empresa->siglas}}</td>

                          <!-- <td><a href="{{ route('empresas.show', ['id' => $empresa->idempresa]) }}">Ver detalles</a></td> -->
                          <td>

                          <div style="display: flex;">
                              <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="" >Ver</button> -->
                              <a class="btn btn-secondary btn-sm" href="{{ route('empresas.editar', ['id' => $empresa->idempresa]) }}" style="margin-left: 3px;">Editar</a>
                              <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#borrar" style="margin-left: 3px;" >Borrar</button> -->
                          </div>
                        </td>

                        </tr>
                        @endforeach

                        </tbody>
                      </table>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="panel-heading">
                          <!-- <a href="{{ url('/departamentos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a> -->
                        </div>
                      </div>
                    </div>

                    @endif

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
