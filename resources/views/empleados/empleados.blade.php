<<<<<<< HEAD
@extends('inicio')
@section('content')
<div class="row">
    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"> -->
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fa fa-user"></i> Lista de Empleados
                    <a class="btn btn-success btn-sm ml-auto pull-right" href="{{route('addEmpleados')}}" >Nuevo</a>
                </h3>
            </div>

            <div class="card-body">
                @if($empleados->isNotEmpty())
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover display">
                        <thead>
                            <tr>
                                <th>CodigoEmpleado</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Fotografia</th>
                                <th>estadoCivil</th>
                                <th>Sexo</th>
                                <th>Status.</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $item)
                            <tr>
                                <td>{{$item->codigoEmpleado}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->apellidoPaterno.' '.$item->apellidoMaterno}}</td>
                                <td>{{$item->fotografia}}</td>
                                <td>{{$item->estadoCivil}}</td>
                                <td>{{$item->sexo}}</td>
                                <td>
                                    @if($item->status=='activo')
                                    <i class="fa fa-check  alert alert-success"></i>
                                    @else
                                    <i class="alert alert-danger">&chi;</i>
                                    @endif
                                </td>
                                <td><div style="display: flex;">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ver{{$item->idEmpleado}}" >Ver</button><hr>
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
@endSection
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
                        <p align="center">
                            <img src="{{asset('images/usr.png')}}"  height="15%" width="30%"/>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 alert alert-success">
                        <label class="form-control-label">Código Empleado:</label>
                        <input type="text"  name="codigoEmpleado" class="form-control" value="{{$item->codigoEmpleado}}" readonly>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label">Nombre: </label>
                        <input type="text"  name="codigoEmpleado" class="form-control" value="{{$item->nombre}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Apellido Paterno:</label>
                        <input type="text"  name="apellidoPaterno" class="form-control" value="{{$item->apellidoPaterno}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Apellido Materno:</label>
                        <input type="text"  name="apellidoMaterno" class="form-control" value="{{$item->apellidoMaterno}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Fecha Nacimiento:</label>
                        <input type="date"  name="fechaNacimiento" class="form-control" value="{{$item->fechaNacimiento}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Lugar Nacimiento:</label>
                        <input type="text" name="lugarNacimiento" class="form-control" value="{{$item->lugarNacimiento}}" readonly>
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
                        <label class="form-control-label" >Curpi:</label>
                        <input type="number"  name="curpi" class="form-control" value="{{$item->curpi}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Curpf:</label>
                        <input type="text" name="curpf" class="form-control" value="{{$item->curpf}}" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Numero Seguro Social:</label>
                        <input type="text" name="numeroSeguroSocial" class="form-control" value="{{$item->numeroSeguroSocial}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Umf:</label>
                        <input type="number"  name="umf" class="form-control" value="{{$item->umf}}"  readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Rfc: </label>
                        <input type="number"  name="umf" class="form-control" value="{{$item->rfc}}" readonly />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class=" form-control-label" >Homoclave :</label>
                        <input type="text" name="homoclave" class="form-control" value="{{$item->homoclave}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Tipo contrato:</label>
                        <input type="text"  name="tipoContrato" class="form-control" value="{{$item->tipoContrato}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Expediente :</label>
                        <input type="text"  name="expediente" class="form-control" value="{{$item->expediente}}" readonly />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Telefono :</label>
                        <input type="text"  name="telefono" class="form-control" value="{{$item->telefono}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label" >Código Postal:</label>
                        <input type="number" name="codigoPostal" class="form-control"  value="{{$item->codigoPostal}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Dirección :</label>
                        <input type="text"  name="direccion" class="form-control"  value="{{$item->direccion}}" readonly />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Población:</label>
                        <input type="text" name="poblacion" class="form-control"  value="{{$item->poblacion}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Estado :</label>
                        <input type="text" name="estado" class="form-control"  value="{{$item->estado}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Nombre Padre:</label>
                        <input type="text" name="nombrePadre" class="form-control"  value="{{$item->nombrePadre}}" readonly />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class=" form-control-label" >Nombre Madre:</label>
                        <input type="text"  name="nombreMadre" class="form-control"  value="{{$item->nombreMadre}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Numero de Afore :</label>
                        <input type="text" name="numeroAfore" class="form-control"  value="{{$item->numeroAfore}}" readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Numero Fonacot :</label>
                        <input type="text" name="numeroFonacot" class="form-control"  value="{{$item->numeroFonacot}}"  readonly />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-control-label" >Correo electrónico:</label>
                        <input type="email" name="correoElectronico" class="form-control"  value="{{$item->correoElectronico}}"readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Clabe Interbancaria:</label>
                        <input type="text"  name="clabeInterbancaria" class="form-control"  value="{{$item->clabeInterbancaria}}"readonly />
                    </div>
                    <div class="col-md-4">
                        <label class=" form-control-label" >Entidad Federativa:</label>
                        <input type="text" name="entidadFederativa" class="form-control" value="{{$item->entidadFederativa}}" readonly />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class=" form-control-label" >Status: </label>
                        <input type="text" name="status" class="form-control" value="{{$item->status}}" readonly />
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
=======
@extends('home')
@section('content')
<button class="btn btn-success btn-xl" data-toggle="modal" data-target="#agregar" >Nuevo</button>

<table class="table"  border="3px" >

    <thead  class="text-bold" >
        <tr>
            <td>CodigoEmpleado</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Fotografia</td>
            <td>FechaNacimiento</td>
            <td>estadoCivil</td>
            <td>Sexo</td>
            <td>Curpi</td>
            <td>Curpf</td>
            <td>Num.Seguro S.</td>
            <td colspan="3" >Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $item)
        <tr>
            <td>{{$item->codigoEmpleado}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellidoPaterno.' '.$item->apellidoMaterno}}</td>
            <td>{{$item->fotografia}}</td>
            <td><input type="date" value="{{$item->fechaNacimiento}}" disabled=""/></td>
            <td>{{$item->estadoCivil}}</td>
            <td>{{$item->sexo}}</td>
            <td>{{$item->curpi}}</td>
            <td>{{$item->curpf}}</td>
            <td>{{$item->numeroSeguroSocial}}</td>

            <td><button class="btn btn-primary btn-xl" >Ver</button></td>
            <td><button class="btn btn-file btn-xl" >Actualizar</button></td>
            <td><button class="btn btn-danger btn-xl" >Eliminar</button></td> 
        </tr>
        @endforeach
    </tbody>
</table>
@endSection
<!- modales bien verijas-->
<!--modal para insertar nuevos empleados-->
<div  class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Añadir nuevo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add" action="{{route('addEmpleados')}}" method="POST" enctype="multipart/form-data" >
                    <input id="token" name="_token" value="{{csrf_token()}}" hidden="true"/>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Codigo Empleado:</label>
                        <div class="col-md-9">
                            <input type="text"  name="codigoEmpleado" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nombre:</label>
                        <div class="col-md-9">
                            <input type="text" name="nombre" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Fotografía:</label>
                        <div class="col-md-9"><!-- mostrar -->
                            <img src="{{asset('images/usr.png')}}"  height="15%" width="30%"/>
                            <input type="file" name="fotografia"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Apellido Paterno:</label>
                        <div class="col-md-9">
                            <input type="text"  name="apellidoPaterno" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Apellido Materno:</label>
                        <div class="col-md-9">
                            <input type="text"  name="apellidoMaterno" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Nombre Largo:</label>
                        <div class="col-md-9">
                            <input type="text"  name="nombreLargo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Fecha Nacimiento:</label>
                        <div class="col-md-9">
                            <input type="date"  name="fechaNacimiento" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Lugar Nacimiento:</label>
                        <div class="col-md-9">
                            <input type="text" name="lugarNacimiento" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Estado civil:</label>
                        <div class="col-md-9">
                            <input type="text"  name="estadoCivil" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Sexo:</label>
                        <div class="col-md-9">
                            <input type="text"  name="sexo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Curpi:</label>
                        <div class="col-md-9">
                            <input type="text"  name="curpi" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Curpf:</label>
                        <div class="col-md-9">
                            <input type="text" name="curpf" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Numero Seguro Social:</label>
                        <div class="col-md-9">
                            <input type="text" name="numeroSeguroSocial" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Umf:</label>
                        <div class="col-md-9">
                            <input type="number"  name="umf" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Rfc:</label>
                        <div class="col-md-9">
                            <input type="text"  name="rfc" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Homoclave :</label>
                        <div class="col-md-9">
                            <input type="text" name="homoclave" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Tipo contrato:</label>
                        <div class="col-md-9">
                            <input type="text"  name="tipoContrato" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Expediente :</label>
                        <div class="col-md-9">
                            <input type="text"  name="expediente" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Telefono :</label>
                        <div class="col-md-9">
                            <input type="text"  name="telefono" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Código Postal:</label>
                        <div class="col-md-9">
                            <input type="number" name="codigoPostal" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Dirección :</label>
                        <div class="col-md-9">
                            <input type="text"  name="direccion" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Población:</label>
                        <div class="col-md-9">
                            <input type="text" name="poblacion" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Estado :</label>
                        <div class="col-md-9">
                            <input type="text" name="estado" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Nombre Padre:</label>
                        <div class="col-md-9">
                            <input type="text" name="nombrePadre" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Nombre Madre:</label>
                        <div class="col-md-9">
                            <input type="text"  name="nombreMadre" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Numero de Afore :</label>
                        <div class="col-md-9">
                            <input type="text" name="numeroAfore" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Numero Fonacot :</label>
                        <div class="col-md-9">
                            <input type="text" name="NumeroFonacot" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Correo electrónico:</label>
                        <div class="col-md-9">
                            <input type="email" name="CorreoElectronico" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Clabe Interbancaria:</label>
                        <div class="col-md-9">
                            <input type="text"  name="ClabeInterbancaria" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" >Entidad Federativa:</label>
                        <div class="col-md-9">
                            <input type="text" name="EntidadFederativa" class="form-control" >
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="close_add" type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="javascript:add('uno')"  class="btn btn-success" >Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--fin del modal que inserta  nuevos empleados-->

<!-- funciones para ajax, envio de datos -->
<script type="text/javascript">
    function add(d){
        var cerrado=$('#close_add');
        var form=$('#add');
        var url=form.attr('action');
        var data=form.serialize();
        
        /*Aqui empieza el ajax (lo chido)*/
        $.post(url,data, function(respuesta){
            alert(respuesta.msj);
            if(respuesta.msj=="Guardado correctamente"){
                  cerrado.click();
            }
        }).fail(function(jqXHR){alert('Ha ocurrido un error: '+ jqXHR.responseText);});
        
    }
</script>
>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
