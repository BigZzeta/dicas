@extends('inicio')
<?php
/* Colecciones de datos */
$tipoContrato = array('1' => 'DETERMINADO', '2' => 'INDETERMINADO', '3' => 'ANUAL','4'=>'POR TIEMPO DETERMINADO','5'=>'INDETERMINADO');
?>
@section('content')
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fa fa-address-book-o"></i> Lista de Empleados
                    <!-- <a class="btn btn-success btn-sm ml-auto pull-right" href="{{route('addEmpleados')}}" >Nuevo</a> -->
                    <a class="btn btn-primary pull-right" style='width:100px; height:33px; margin-left: 5px' href="{{route('addEmpleados')}}" >Nuevo</a>
                    <a class="btn btn-success pull-right" style='width:100px; height:33px; margin-left: 5px' href="{{route('expedientes.show', ['id' => $empleados->idempleado]) }}" >Expediente</a>
                    <!-- <a class="btn btn-primary pull-right" style='width:100px; height:33px; margin-left: 5px' href="#">Primary</a> -->
                </h3>
            </div>
        </div>
    </div>
</div>

<div>
  <div>
    <div class="modal-body" >
        <!--Aqui va todo lo chido -->
        <div class="form-group row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><!-- mostrar -->
                @if(!$empleados->fotografia)
                <p align="center">
                    <img src="/images/usr.png" alt="{{$empleados->idempleado}}" height="15%" width="30%"/>
                </p>
                @else
                <p align="center">
                    <img src="/img/empleados/{{$empleados->fotografia}}" alt="{{$empleados->idempleado}}" height="15%" width="30%"/>
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 alert alert-success">
                <label class="form-control-label">Código Empleado:</label>
                <input type="text"  name="codigoempleado" class="form-control text text-uppercase" value="{{$empleados->codigoempleado}}" readonly>
            </div>
        </div>
        <!--DATOS PERSONALES -->
        <h4 class="tex text-primary">Datos Personales</h4>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <label for="nombre">Nombre :</label>
                <input id="nombre" name="nombre" class="form-control text text-uppercase" value="{{$empleados->nombre}}" readonly/>
            </div>
            <div class="col-md-4">
                <label for="apellidoPaterno">Apellido Paterno :</label>
                <input id="apellidoPaterno" name="apellidoPaterno" class="form-control text text-uppercase" value="{{$empleados->apellidoPaterno}}" readonly/>
            </div>
            <div class="col-md-4">
                <label for="apellidoMaterno">apellido Materno :</label>
                <input id="apellidoMaterno" name="apellidoMaterno" class="form-control text text-uppercase" value="{{$empleados->apellidoMaterno}}" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="form-control-label" >Fecha Nacimiento:</label>
                <input type="date"  name="fechaNacimiento" class="form-control" value="{{$empleados->fechaNacimiento}}" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-control-label" >Lugar Nacimiento:</label>
                <input type="text" name="lugarNacimiento" class="form-control text text-uppercase" value="{{$empleados->lugarNacimiento}}" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-control-label" >Estado civil:</label>
                <input type="text"  name="estadoCivil" class="form-control" value="{{$empleados->estadoCivil}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="form-control-label" >Sexo:</label>
                <input type="text"  name="sexo" class="form-control" value="{{$empleados->sexo}}" readonly>
            </div>
            <div class="col-md-4">
                <label class=" form-control-label" >Nombre Padre:</label>
                <input type="text" name="nombrePadre" class="form-control text text-uppercase"  value="{{$empleados->nombrePadre}}" readonly />
            </div>
            <div class="col-md-4">
                <label class=" form-control-label" >Nombre Madre:</label>
                <input type="text"  name="nombreMadre" class="form-control text text-uppercase"  value="{{$empleados->nombreMadre}}" readonly />
            </div>
        </div>
        <hr/>
        <h4 class="tex text-primary"> Datos Generales</h4>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <label class="form-control-label" >Curp:</label>
                <input  name="curp" class="form-control text text-uppercase" value="{{$empleados->curp}}" readonly>
            </div>
            <div class="col-md-2">
                <label class=" form-control-label" >Rfc: </label>
                <input   name="umf" class="form-control text text-uppercase" value="{{$empleados->rfc}}" readonly />
            </div>
            <div class="col-md-3">
                <label class="form-control-label" >Numero Seguro Social:</label>
                <input type="text" name="numeroSeguroSocial" class="form-control text text-uppercase" value="{{$empleados->numeroSeguroSocial}}" readonly />
            </div>
            <div class="col-md-3">
                <label class="form-control-label" >Umf:</label>
                <input type="number"  name="umf" class="form-control text text-uppercase" value="{{$empleados->umf}}"  readonly />
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class=" form-control-label" >Numero de Afore :</label>
                <input type="text" name="numeroAfore" class="form-control text text-uppercase"  value="{{$empleados->numeroAfore}}" readonly />
            </div>
            <div class="col-md-3">
                <label class=" form-control-label" >Numero Fonacot :</label>
                <input type="text" name="numeroFonacot" class="form-control text text-uppercase"  value="{{$empleados->numeroFonacot}}"  readonly />
            </div>
            <div class="col-md-3">
                <label class=" form-control-label" >Cuenta (Banorte):</label>
                <input type="text"  name="cuentapagoelectronico" class="form-control"  value="{{$empleados->cuentapagoelectronico}}"readonly />
            </div>
            <div class="col-md-3">
                <label class="form-control-label" >Tipo contrato:</label>
                <input style="font-size: 11px;" type="text"  name="tipoContrato" class="form-control" value="<?php echo $tipoContrato[$empleados->tipoContrato] ?>" readonly />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class=" form-control-label" >Expediente :</label>
                <textarea  name="expediente" class="form-control text text-uppercase" value="" readonly >{{$empleados->expediente}}</textarea>
            </div>
        </div>
        <hr/>
        <h4 class="tex text-primary">Domicilio actual</h4>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <label class=" form-control-label" >Dirección :</label>
                <input type="text"  name="direccion" class="form-control text text-uppercase"  value="{{$empleados->direccion}}" readonly />
            </div>
            <div class="col-md-4">
                <label class="form-control-label" >Población:</label>
                <input type="text" name="poblacion" class="form-control text text-uppercase"  value="{{$empleados->poblacion}}" readonly />
            </div>
            <div class="row">
              <div class="col-md-4">
                  <label class="form-control-label" >Código Postal:</label>
                  <input type="number" name="codigoPostal" class="form-control"  value="{{$empleados->codigoPostal}}" readonly />
              </div>
              <div class="col-md-4">
                  <label class="form-control-label" >Telefono :</label>
                  <input type="text"  name="telefono" class="form-control" value="{{$empleados->telefono}}" readonly />
              </div>
              <div class="col-md-4">
                  <label class="form-control-label" >Correo electrónico:</label>
                  <input type="email" name="correoElectronico" class="form-control"  value="{{$empleados->correoElectronico}}"readonly />
              </div>
            </div>
          </div>
        <hr/>
        <h4 class="tex text-primary">Estado y Movimientos</h4>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <label class=" form-control-label" >Estado :</label>
                @if($empleados->estadoempleado=='A')
                <input type="text" name="estadoempleado" class="form-control text-success"  value="ACTIVO" readonly />
                @else
                <input type="text" name="estadoempleado" class="form-control text-danger"  value="INACTIVO" title="Solo un administrador puede volver activar este empleado" readonly />
                @endif
            </div>
            <div class="col-md-4">
                <label class="form-control-label" >Ultimo movimiento: </label>
                <input type="text" name="registro" class="form-control" value="{{$empleados->registro}}" readonly />
            </div>
        </div>
        <!-- <hr/>
        <h4 class="tex text-primary">Expediente</h4>
        <hr/> -->

    </div>
  </div>
  <!--DATOS PERSONALES -->

</div>

</div>
</div>
</div>

<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header bnt-gruo btn-group-sm">
                    <a class="btn btn-success pull-right" style='width:100px; height:33px; margin-left: 5px' href="{{route('addEmpleados')}}" >Nuevo</a>
                    <a class="btn btn-success pull-right" style='width:100px; height:33px; margin-left: 5px' href="{{route('expedientes.show', ['id' => $empleados->idempleado])}}" >Ver Expediente</a>
                    <a class="btn btn-primary pull-right" style='width:100px; height:33px; margin-left: 5px' href="#">Primary</a>
            </div>
        </div>
    </div>
</div>


@endSection
