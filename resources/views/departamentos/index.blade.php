@extends('inicio')
@section('title',"Mostrando puestos")
@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Departamentos
                      <a href="{{ url('/departamentos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    @if ($departamentos->isNotEmpty())
                    <div class="card-body">
                      <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-hover display">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Num. Depto</th>
                            <th>Nombre</th>
                            <th>Total Empleados</th>
                            <th>Detalle</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($departamentos as $departamento)
                        <tr>
                          <td> {{ $departamento->id }}</td>
                          <td align="center">{{ $departamento->numerodepartamento}}</td>
                          <td>{{ $departamento->nombre }}</td>
                          <td align="center">{{ $departamento->numempleados}}</td>

                          <td><a href="{{ route('departamentos.show', ['id' => $departamento->id]) }}">Ver detalles</a></td>

                        </tr>
                        @endforeach

                        </tbody>
                      </table>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="panel-heading">
                          <a href="{{ url('/departamentos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
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
