@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> UNE's
                        <a href="{{ url('/une/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    @if ($unes->isNotEmpty())
                      <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover display">
                          <thead>
                            <tr>
                              <!-- <th>Id</th> -->
                              <th>Num. UNE</th>
                              <th>Nombre</th>
                              <th>Direccion</th>
                              <th>Total de Puestos</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>

                          @foreach($unes as $une)
                          <tr>
                            <!-- <td> {{ $une->idune }}</td> -->
                            <td align="center">{{ $une->numeroune}}</td>
                            <td>{{$une->nombre}}</td>
                            <td>{{$une->direccion}}</td>
                            <td align="center">{{$une->inventariopuestos}}</td>
                            <td>
                              <!-- <a href="{{ route('unes.show', ['id' => $une->idune]) }}">Ver detalles</a> -->
                              <div style="display: flex;">
                                  <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="" >Ver</button> -->
                                  <a class="btn btn-primary btn-sm"  href="{{ route('unes.show', ['id' => $une->idune]) }}" style="margin-left: 3px;">Ver</a>
                                  <a class="btn btn-secondary btn-sm" href="{{ route('unes.editar', ['id' => $une->idune]) }}" style="margin-left: 3px;">Editar</a>
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
                            <a href="{{ url('/une/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
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
