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