@extends('inicio')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Expediente de: {{ $expedientes[0]->nombre}} {{ $expedientes[0]->apellidoPaterno}} {{ $expedientes[0]->apellidoMaterno}}
                        <!-- <a href="" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo</a> -->
                      </h3>
                    </div>
                </div>
            </div>
            <!-- end row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card mb-3">
                  <div class="card-body">
                    @if ($expedientes->isNotEmpty())
                      <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover display">
                          <thead>
                            <tr>
                              <th>Num</th>
                              <!-- <th>ID. Expediente</th> -->
                              <!-- <th>ID. Empleado</th> -->
                              <!-- <th>ID. CatExpediente</th> -->
                              <th>Documento</th>
                              <!-- <th>Nombre</th> -->
                              <!-- <th>Estatus</th> -->
                              <th>Observaciones</th>
                              <th>Fecha del documento</th>
                              <th>Detalles</th>
                            </tr>
                          </thead>
                          <tbody>

                          <?php
                          $a=0;
                          ?>

                          @foreach($expedientes as $expediente)
                          <tr>
                            <td align="center"><?php echo ++$a ?></td>
                            <!-- <td align="center">{{ $expediente->idexpediente}}</td> -->
                            <!-- <td align="center">{{ $expediente->idempleado }}</td> -->
                            <!-- <td align="center">{{ $expediente->idcatexpediente }}</td> -->
                            <td>{{ $expediente->nombredocumento }}</td>
                            <td>{{ $expediente->observaciones}}</td>
                            <!-- <td align="center">{{ $expediente->nombre }} {{ $expediente->apellidoPaterno }} {{ $expediente->apellidoMaterno }}</td> -->
                            <!-- <td>{{ $expediente->documento }}</td> -->
                            <td>{{$expediente->timestamp}}</td>
                            <td>
                              <div align="center" style="display: flex;">
                                <a class="btn btn-primary btn-sm"  href="../../documentos/expedientes/{{ $expediente->documento }}" download="../../documentos/expedientes/{{ $expediente->documento }}" style="margin-left: 3px;">Descargar</a>
                                <a class="btn btn-secondary btn-sm" href="{{ route('expedientes.editar', ['id' => $expediente->idexpediente]) }}" style="margin-left: 3px;">Editar</a>
                                <button type="button" onclick="javascript:pasar({{$expediente->idexpediente}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#borrar" style="margin-left: 3px;" >Borrar</button>
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
                            <a class="btn btn-primary pull-right" style='width:100px; height:33px; margin-left: 5px' href="{{ route('expedientes.agregar', ['id' => $expediente->idempleado]) }}" >Nuevo</a>
                            <a class="btn btn-success pull-right" style='width:100px; height:33px; margin-left: 5px' href="{{ route('empleados.show',['id'=>$expediente->idempleado]) }}" >Volver</a>
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

<!--Modal Borrar -->
<div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #FF2C00;">
                <h5 class="modal-title" >Confirmar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  action="{{route('deleteExpediente')}}" method="POST" >
                <div class="modal-body" >
                    <div class="container-fluid">
                        <h4>¿Dar de Baja este registro?</h4>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"/>
                        <input type="hidden" name="idexpediente"  id="id"/>
                    </div>
                </div>
                <div class="modal-footer" >
                    <button  type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    <button  type="submit"  class="btn btn-success btn-xl">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function pasar(id){
    var elemento = document.getElementById('id');
    elemento.value = id;
    }
</script>



@endsection
