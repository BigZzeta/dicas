@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Pagadora
                        <a href="{{ url('/pagadora/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    @if ($pagadoras->isNotEmpty())
                      <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover display">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <!-- <th>Num. Puesto</th> -->
                              <th>Nombre</th>
                              <th>Direccion</th>
                              <th>Detalles</th>
                            </tr>
                          </thead>
                          <tbody>

                          @foreach($pagadoras as $pagadora)
                          <tr>
                            <td>{{ $pagadora->idpagadora }}</td>
                            <td>{{ $pagadora->nombre }}</td>
                            <td>{{ $pagadora->direccion }}</td>
                            <td>
                              <div style="display: flex;">
                                <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="" >Ver</button> -->
                                <a class="btn btn-primary btn-sm"  href="{{ route('pagadoras.show', ['id' => $pagadora->idpagadora]) }}" style="margin-left: 3px;">Ver</a>
                                <a class="btn btn-secondary btn-sm" href="{{ route('pagadoras.editar', ['id' => $pagadora->idpagadora]) }}" style="margin-left: 3px;">Editar</a>
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
                            <a href="{{ url('/pagadora/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
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
