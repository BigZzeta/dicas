@extends('inicio')
<?php
/* Colecciones de datos */
$tipoContrato = array('1' => 'BIMESTRAL', '2' => 'SEMESTRAL', '3' => 'ANUAL');
?>
@section('content')
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fa fa-address-book-o"></i> Lista de Empleados
                    <a class="btn btn-success btn-sm ml-auto pull-right" href="{{route('addEmpleados')}}" >Nuevo</a>
                </h3>
            </div>

            <div class="card-body">
                @if($empleados->isNotEmpty())
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover display" style="text-align: center">
                        <thead>
                            <tr>
                                <th>CodigoEmpleado</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                              <!--  <th>Fotografia</th>-->
                                <th>estadoCivil</th>
                                <th>Sexo</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $item)
                            <tr>
                                <td>{{$item->codigoEmpleado}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->apellidoPaterno.' '.$item->apellidoMaterno}}</td>
                             <!--   <td>
                                    @if(!$item->fotografia)
                                    <p align="center">
                                        <img src="/images/usr.png" alt="{{$item->idEmpleado}}" width="70%" height="10%"/>
                                    </p>
                                    @else
                                    <p align="center">
                                        <img src="/img/empleados/{{$item->fotografia}}" alt="{{$item->idEmpleado}}" width="70%" height="10%"/>
                                    </p>
                                    @endif
                                </td>-->
                                <td>
                                    {{ $item->estadoCivil }}
                                </td>
                                <td>
                                    {{$item->sexo}}
                                </td>
                                <td>
                                    @if($item->estado=='A')
                                    <p class="badge badge-success" >ACTIVO</p>
                                    @else
                                    <p class="badge badge-danger" title="Solo un administrador puede volver activar este empleado" >INACTIVO</p>
                                    @endif
                                </td>
                                <td>
                                    <div style="display: flex;">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ver{{$item->idEmpleado}}" >Ver</button>
                                        <a class="btn btn-secondary btn-sm" href="{{route('updateEmpleados').'/'.$item->idEmpleado}}" style="margin-left: 3px;">Editar</a>
                                        <button type="button" onclick="javascript:pasar({{$item->idEmpleado}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#borrar" style="margin-left: 3px;" >Borrar</button>
                                    </div>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success btn-sm ml-auto pull-right" href="{{route('addEmpleados')}}"  >Nuevo</a>
                </div>
            </div>
            @else
            <div class="alert alert-danger">No hay datos</div>
            @endif
        </div>
    </div>
</div>

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
            <form  action="{{route('deleteEmpleados')}}" method="POST" >
                <div class="modal-body" >
                    <div class="container-fluid">
                        <h4>¿Esta seguro de eliminar este registro?</h4>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"/>
                        <input type="hidden" name="idEmpleado"  id="id"/>
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

<!-- Modal para vista de datos-->
@foreach($empleados as $item)
<div class="modal fade" id="ver{{$item->idEmpleado}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: steelblue;">
                <h5 class="modal-title" >Ver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  >
                <!--Aqui va todo lo chido --> 
                <div class="form-group row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6"><!-- mostrar -->
                        @if(!$item->fotografia)
                        <p align="center">
                            <img src="/images/usr.png" alt="{{$item->idEmpleado}}" height="15%" width="30%"/>
                        </p>
                        @else
                        <p align="center">
                            <img src="/img/empleados/{{$item->fotografia}}" alt="{{$item->idEmpleado}}" height="15%" width="30%"/>
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 alert alert-success">
                        <label class="form-control-label">Código Empleado:</label>
                        <input type="text"  name="codigoEmpleado" class="form-control text text-uppercase" value="{{$item->codigoEmpleado}}" readonly>
                    </div>
                </div> 
                <!--DATOS PERSONALES -->
                <h4 class="tex text-primary">Datos Personales</h4>
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <label for="nombre">Nombre :</label>
                        <input id="nombre" name="nombre" class="form-control text text-uppercase" value="{{$item->nombre}}" readonly/>
                    </div>
                    <div class="col-md-4">
                        <label for="apellidoPaterno">Apellido Paterno :</label>
                        <input id="apellidoPaterno" name="apellidoPaterno" class="form-control text text-uppercase" value="{{$item->apellidoPaterno}}" readonly/>
                    </div>
                    <div class="col-md-4">
                        <label for="apellidoMaterno">apellido Materno :</label>
                        <input id="apellidoMaterno" name="apellidoMaterno" class="form-control text text-uppercase" value="{{$item->apellidoMaterno}}" readonly/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Fecha Nacimiento:</label>
                        <input type="date"  name="fechaNacimiento" class="form-control" value="{{$item->fechaNacimiento}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Lugar Nacimiento:</label>
                        <input type="text" name="lugarNacimiento" class="form-control text text-uppercase" value="{{$item->lugarNacimiento}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Estado civil:</label>
                        <input type="text"  name="estadoCivil" class="form-control" value="{{$item->estadoCivil}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Sexo:</label>
                        <input type="text"  name="sexo" class="form-control" value="{{$item->sexo}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Nombre Padre:</label>
                        <input type="text" name="nombrePadre" class="form-control text text-uppercase"  value="{{$item->nombrePadre}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Nombre Madre:</label>
                        <input type="text"  name="nombreMadre" class="form-control text text-uppercase"  value="{{$item->nombreMadre}}" readonly />
                    </div>
                </div>
                <hr/>
                <h4 class="tex text-primary"> Datos Generales</h4>
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Curp:</label>
                        <input  name="curp" class="form-control text text-uppercase" value="{{$item->curp}}" readonly>
                    </div>
                    <div class="col-md-2">
                        <label class=" form-control-label" >Rfc: </label>
                        <input   name="umf" class="form-control text text-uppercase" value="{{$item->rfc}}" readonly />
                    </div>
                    <div class="col-md-3">
                        <label class="form-control-label" >Numero Seguro Social:</label>
                        <input type="text" name="numeroSeguroSocial" class="form-control text text-uppercase" value="{{$item->numeroSeguroSocial}}" readonly />
                    </div>
                    <div class="col-md-3">
                        <label class="form-control-label" >Umf:</label>
                        <input type="number"  name="umf" class="form-control text text-uppercase" value="{{$item->umf}}"  readonly />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class=" form-control-label" >Numero de Afore :</label>
                        <input type="text" name="numeroAfore" class="form-control text text-uppercase"  value="{{$item->numeroAfore}}" readonly />
                    </div>
                    <div class="col-md-3">
                        <label class=" form-control-label" >Numero Fonacot :</label>
                        <input type="text" name="numeroFonacot" class="form-control text text-uppercase"  value="{{$item->numeroFonacot}}"  readonly />
                    </div>
                    <div class="col-md-3">
                        <label class=" form-control-label" >Clabe Interbancaria:</label>
                        <input type="text"  name="clabeInterbancaria" class="form-control"  value="{{$item->clabeInterbancaria}}"readonly />
                    </div>
                    <div class="col-md-3">
                        <label class="form-control-label" >Tipo contrato:</label>
                        <input type="text"  name="tipoContrato" class="form-control" value="<?php echo $tipoContrato[$item->tipoContrato] ?>" readonly />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class=" form-control-label" >Expediente :</label>
                        <textarea  name="expediente" class="form-control text text-uppercase" value="" readonly >{{$item->expediente}}</textarea>
                    </div>
                </div>
                <hr/>
                <h4 class="tex text-primary">Domicilio actual</h4>
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <label class=" form-control-label" >Dirección :</label>
                        <input type="text"  name="direccion" class="form-control text text-uppercase"  value="{{$item->direccion}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Población:</label>
                        <input type="text" name="poblacion" class="form-control text text-uppercase"  value="{{$item->poblacion}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Entidad Federativa:</label>
                        @foreach($estados as $edos)
                        @if($edos->id==$item->entidadFederativa)
                        <input type="text" name="entidadFederativa" class="form-control" value="{{$edos->estado}}" readonly />
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Código Postal:</label>
                        <input type="number" name="codigoPostal" class="form-control"  value="{{$item->codigoPostal}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Telefono :</label>
                        <input type="text"  name="telefono" class="form-control" value="{{$item->telefono}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Correo electrónico:</label>
                        <input type="email" name="correoElectronico" class="form-control"  value="{{$item->correoElectronico}}"readonly />
                    </div>
                </div>
                <hr/>
                <h4 class="tex text-primary">Estado y Movimientos</h4>
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <label class=" form-control-label" >Estado :</label>
                        @if($item->estado=='A')
                        <input type="text" name="estado" class="form-control text-success"  value="ACTIVO" readonly />
                        @else
                        <input type="text" name="estado" class="form-control text-danger"  value="INACTIVO" title="Solo un administrador puede volver activar este empleado" readonly />
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Ultimo movimiento: </label>
                        <input type="text" name="registro" class="form-control" value="{{$item->registro}}" readonly />
                    </div>
                </div>
            </div>
            <div class="modal-footer" >
                <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!--Fin modal ver- -->


<script type="text/javascript">
    function pasar(id){
    var elemento = document.getElementById('id');
    elemento.value = id;
    }
</script>
<!-- funciones para ajax, envio de datos 
<script type="text/javas            cript">
function ad            d(d) {
var cerrado = $('#close_add');
var form = $('#add');
var url            = form.attr('action');
var data = form.serialize();

        /*Aqui empieza el ajax (lo chido)*/
        $.post(url, data, function (respuesta) {
            alert(respuesta.msj);
            if (respuesta.msj == "Guardado correctamente") {
                cerrado.click();
            }
        }).fail(function (jqXHR) {
            alert('Ha ocurrido un error: ' + jqXHR.responseText);
        });

    }
</script>-->
@endSection