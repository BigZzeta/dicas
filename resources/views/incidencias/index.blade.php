@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Incidencias
                      <a href="{{ url('/incidencias/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    @if ($incidencias->isNotEmpty())
                    <div class="card-body">
                      <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-hover display">
                        <thead>
                          <tr>
                            <th>Num</th>
                            <th>Nombre</th>
                            <th>Detalle</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($incidencias as $incidencia)
                        <tr>
                          <td align="center"> {{ $incidencia->idincidencia }}</td>
                          <td>{{ $incidencia->nombre}}</td>
                          <td>
                            <div style="display: flex;">
                              <a class="btn btn-primary btn-sm"  href="{{ route('incidencias.show', ['id' => $incidencia->idincidencia]) }}" style="margin-left: 3px;">Ver</a>
                              <a class="btn btn-secondary btn-sm" href="{{ route('incidencias.editar', ['id' => $incidencia->idincidencia]) }}" style="margin-left: 3px;">Editar</a>
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
                          <a href="{{ url('/inciencias/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
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
