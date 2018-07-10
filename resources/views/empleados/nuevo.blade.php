@extends('inicio')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-md-offset-1">
        <div class="card mb-3">
            <div class="card-header">
                {{--  @include('errors.error') --}}
                <h3>
                    <i class="fa fa-user"></i> Nuevos Empleados
                </h3>
                <a href="/empleados">Regresar</a>
            </div>
            <div class="card-body">
                <form id="add" action="{{route('addEmpleados').'/1'}}" method="post" enctype="multipart/form-data" >
                   <!-- <input id="token" name="_token" value="{{csrf_token()}}" hidden="true"/>-->
                    {{ csrf_field() }}
                    <!-- aqui vamos acomodando el codigo-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <p align="center">
                                    <label class="form-control-label">Fotografía:</label>
                                    <img src="{{asset('images/usr.png')}}"  height="15%" width="30%"/>
                                    <input type="file" name="fotografia"/>  
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-control-label">Codigo Empleado:</label>
                                <input type="text"  name="codigoEmpleado" class="form-control" value="{{ old('codigoEmpleado') }}">
                                @if($errors->get('codigoEmpleado'))  
                                <div class="alert alert-danger">{{ $errors->get('codigoEmpleado')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label">Apellido Paterno:</label>
                                <input type="text"  name="apellidoPaterno" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label">Apellido Materno:</label>
                                <input type="text"  name="apellidoMaterno" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Fecha Nacimiento:</label>
                                <input type="date"  name="fechaNacimiento" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Lugar Nacimiento:</label>
                                <input type="text" name="lugarNacimiento" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Estado civil:</label>
                                <input type="text"  name="estadoCivil" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Sexo:</label>
                      <!--  <input type="text"  name="sexo" class="form-control">-->
                                <select name="sexo" class="form-control">
                                    <option label="Masculino" value="1" />
                                    <option label="Femenino" value="2" />
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Curpi:</label>
                                <input type="number"  name="curpi" class="form-control" value="{{ old('curpi') }}">
                                @if($errors->get('curpi'))  
                                <div class="alert alert-danger">{{ $errors->get('curpi')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Curpf:</label>
                                <input type="text" name="curpf" class="form-control" value="{{ old('curpf') }}">
                                @if($errors->get('curpf'))  
                                <div class="alert alert-danger">{{ $errors->get('curpf')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero Seguro Social:</label>
                                <input type="text" name="numeroSeguroSocial" class="form-control" value="{{ old('numeroSeguroSocial') }}" >
                                @if($errors->get('numeroSeguroSocial'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroSeguroSocial')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Umf:</label>
                                <input type="number"  name="umf" class="form-control" value="{{ old('umf') }}">
                                @if($errors->get('umf'))  
                                <div class="alert alert-danger">{{ $errors->get('umf')[0]}}</div>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Rfc:</label>
                                <input type="text"  name="rfc" class="form-control" value="{{ old('rfc') }}">
                                @if($errors->get('rfc'))  
                                <div class="alert alert-danger">{{ $errors->get('rfc')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Homoclave :</label>
                                <input type="text" name="homoclave" class="form-control" value="{{ old('homoclave') }}">
                                @if($errors->get('homoclave'))  
                                <div class="alert alert-danger">{{ $errors->get('homoclave')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Tipo contrato:</label>
                                <input type="text"  name="tipoContrato" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Expediente :</label>
                                <input type="text"  name="expediente" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Telefono :</label>
                                <input type="text"  name="telefono" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Código Postal:</label>
                                <input type="number" name="codigoPostal" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Dirección :</label>
                                <input type="text"  name="direccion" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Población:</label>
                                <input type="text" name="poblacion" class="form-control" >
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Estado :</label>
                                <input type="text" name="estado" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Nombre Padre:</label>
                                <input type="text" name="nombrePadre" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Nombre Madre:</label>
                                <input type="text"  name="nombreMadre" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero de Afore :</label>
                                <input type="text" name="numeroAfore" class="form-control" value="{{ old('numeroAfore') }}" >
                                @if($errors->get('numeroAfore'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroAfore')[0]}}</div>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero Fonacot :</label>
                                <input type="text" name="numeroFonacot" class="form-control" value="{{ old('numeroFonacot') }}">
                                @if($errors->get('numeroFonacot'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroFonacot')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Correo electrónico:</label>
                                <input type="email" name="correoElectronico" class="form-control" value="{{ old('correoElectronico') }}">
                                @if($errors->get('correoElectronico'))  
                                <div class="alert alert-danger">{{ $errors->get('correoElectronico')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Clabe Interbancaria:</label>
                                <input type="text"  name="clabeInterbancaria" class="form-control" value="{{ old('ClabeInterbancaria') }}">
                                @if($errors->get('clabeInterbancaria'))  
                                <div class="alert alert-danger">{{ $errors->get('clabeInterbancaria')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Entidad Federativa:</label>
                                <input type="text" name="entidadFederativa" class="form-control" >
                            </div>
                        </div>
                        <hr>
                        <button type="submit"    class="btn btn-success" >Guardar</button>
                        <button id="close_add" type="reset" class="btn btn-secondary" >Borrar</button>
                        <a href="/empleados">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection