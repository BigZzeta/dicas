@extends('inicio')
@section('content')
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="alert alert-danger"><i class="fa fa-address-book-o"></i> Empleados con baja
                </h3>
            </div>
            <div class="card-body">
                @if($empleados->isNotEmpty())
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover display" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre Empleado</th>
                                <th>Correo Electronico</th>
                                <th>Activar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $item)
                            <tr>
                                <td>{{$item->codigoempleado}}</td>
                                <td>{{$item->nombre.' '.$item->apellidoPaterno.' '.$item->apellidoMaterno}}</td>
                                <td>{{$item->correoElectronico}}</td>
                                <td><button type="button" onclick="activar({{$item->idempleado}})" class="btn btn-sm btn-success" data-toggle='modal' data-target='#activar' >Activar</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @else
            <div class="alert alert-dark"><p align='center'>
                    No hay bajas
                </p></div>
            @endif
        </div>
    </div>
</div>

<!-- modal para Activa y desactivar datos -->
<div class="modal fade" id="activar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header badge badge-success" >
                <h5 class="modal-title" >Confirmar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  action="{{route('deleteEmpleados').'/1'}}" method="POST" >
                <div class="modal-body" >
                    <div class="container-fluid">
                        <h4>¿Esta seguro de activar este empleado?</h4>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"/>
                        <input type="hidden" name="idempleado"  id="id"/>
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
<!-- fin modal -->
<!-- funciones javascript para la activacion de los registros-->
<script type="text/javascript">
    function activar(id){
    var activar = document.getElementById('id').value = id;
    }
</script>
<!-- fin javascript-->
@endsection
