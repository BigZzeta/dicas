@extends('inicio')
@section('content')


<!-- nueva tabla -->
<div class="row">
    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"> -->
    <div class="col">
      <div class="card mb-3">
        <div class="card-header">
          <h3><i class="fa fa-table"></i> Puestos
          <a href="{{ url('/puestos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
          </h3>
        </div>

        @if ($puestos->isNotEmpty())
        <div class="card-body">
          <div class="table-responsive">
          <table id="example1" class="table table-bordered table-hover display">
            <thead>
              <tr>
                <th>Id</th>
                <th>Num. Puesto</th>
                <th>Nombre</th>
                <th>Funciones</th>
                <th>Nivel Estrucural</th>
                <th>Carta Técnica</th>
                <th>Sueldo Mínimo</th>
                <th>Sueldo Máximo</th>
                <th>Detalles</th>
              </tr>
            </thead>
            <tbody>

            @foreach($puestos as $puesto)
            <tr>
              <td> {{ $puesto->idpuesto }}</td>
              <td align="center">{{ $puesto->numeropuesto}}</td>
              <td>{{ $puesto->nombre }}</td>
              <td align="center">{{ $puesto->funciones }}</td>
              <td align="center">{{ $puesto->nivelestructural }}</td>
              <td align="center">{{ $puesto->cartatecnica }}</td>
              <td align="center">{{ $puesto->sueldominimo }}</td>
              <td align="center">{{ $puesto->sueldomaximo }}</td>

              <td><a href="{{ route('puestos.show', ['id' => $puesto->id]) }}">Ver detalles</a></td>

            </tr>
            @endforeach

            </tbody>
          </table>
          </div>

        </div>

        <div class="row">
          <div class="col">
            <div class="panel-heading">
              <a href="{{ url('/puestos/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a>
            </div>
          </div>
        </div>

        @endif


      </div><!-- end card-->
    </div>
</div>
<!-- fin de nueva tabla -->

@endsection
