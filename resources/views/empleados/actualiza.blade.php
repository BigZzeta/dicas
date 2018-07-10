@extends('inicio')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-md-offset-1">
        <div class="card mb-3">
            <div class="card-header">
                {{--  @include('errors.error') --}}
                <h3>
                    <i class="fa fa-user"></i> <i class="fa fa-pencil"></i> Actualizar
                </h3>

            </div>
            <div class="card-body">
                <form id="add" action="{{route('updateEmpleados').'/update/'.$edit->idEmpleado}}" method="post" enctype="multipart/form-data" >
                   <!-- <input id="token" name="_token" value="{{csrf_token()}}" hidden="true"/>-->
                    {{ csrf_field() }}
                    <!-- Aqui vamos a empezar a poner esto bonito-->
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
                                <label class="form-control-label" for="text-input">Codigo Empleado:</label>
                                <input type="text"  name="codigoEmpleado" class="form-control" value="{{$edit->codigoEmpleado}}">
                                @if($errors->get('codigoEmpleado'))  
                                <div class="alert alert-danger">{{ $errors->get('codigoEmpleado')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" value="{{$edit->nombre}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label">Apellido Paterno:</label>
                                <input type="text"  name="apellidoPaterno" class="form-control" value="{{$edit->apellidoPaterno}}">
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label">Apellido Materno:</label>
                                <input type="text"  name="apellidoMaterno" class="form-control" value="{{$edit->apellidoMaterno}}">

                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-control-label" >Fecha Nacimiento:</label>
                                <input type="date"  name="fechaNacimiento" class="form-control" value="{{$edit->fechaNacimiento}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Lugar Nacimiento:</label>
                                <input type="text" name="lugarNacimiento" class="form-control" value="{{$edit->lugarNacimiento}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Estado civil:</label>
                                <input type="text"  name="estadoCivil" class="form-control" value="{{$edit->estadoCivil}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Sexo:</label>
                                <input type="text"  name="sexo" class="form-control" value="{{$edit->sexo}}">
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-control-label" >Curpi:</label>
                                <input type="number"  name="curpi" class="form-control" value="{{$edit->curpi}}">
                                @if($errors->get('curpi'))  
                                <div class="alert alert-danger">{{ $errors->get('curpi')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Curpf:</label>
                                <input type="text" name="curpf" class="form-control" value="{{$edit->curpf}}">
                                @if($errors->get('curpf'))  
                                <div class="alert alert-danger">{{ $errors->get('curpf')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero Seguro Social:</label>
                                <input type="text" name="numeroSeguroSocial" class="form-control" value="{{$edit->numeroSeguroSocial}}">
                                @if($errors->get('numeroSeguroSocial'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroSeguroSocial')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Umf:</label>
                                <input type="number"  name="umf" class="form-control" value="{{$edit->umf}}">
                                @if($errors->get('umf'))  
                                <div class="alert alert-danger">{{ $errors->get('umf')[0]}}</div>
                                @endif
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Rfc:</label>
                                <input type="text"  name="rfc" class="form-control" value="{{$edit->rfc}}">
                                @if($errors->get('rfc'))  
                                <div class="alert alert-danger">{{ $errors->get('rfc')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Homoclave :</label>
                                <input type="text" name="homoclave" class="form-control" value="{{$edit->homoclave}}">
                                @if($errors->get('homoclave'))  
                                <div class="alert alert-danger">{{ $errors->get('homoclave')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Tipo contrato:</label>
                                <input type="text"  name="tipoContrato" class="form-control" value="{{$edit->tipoContrato}}" >
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Expediente :</label>
                                <input type="text"  name="expediente" class="form-control" value="{{$edit->expediente}}">
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Telefono :</label>
                                <input type="text"  name="telefono" class="form-control" value="{{$edit->telefono}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Código Postal:</label>
                                <input type="number" name="codigoPostal" class="form-control"  value="{{$edit->codigoPostal}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Dirección :</label>
                                <input type="text"  name="direccion" class="form-control"  value="{{$edit->direccion}}">
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Población:</label>
                                <input type="text" name="poblacion" class="form-control"  value="{{$edit->poblacion}}">
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Estado :</label>
                                <input type="text" name="estado" class="form-control"  value="{{$edit->estado}}">
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Nombre Padre:</label>
                                <input type="text" name="nombrePadre" class="form-control"  value="{{$edit->nombrePadre}}">
                            </div>
                        <div class="col-md-3">
                            <label class=" form-control-label" >Nombre Madre:</label>
                            <input type="text"  name="nombreMadre" class="form-control"  value="{{$edit->nombreMadre}}">
                        </div>
                        <div class="col-md-3">
                            <label class=" form-control-label" >Numero de Afore :</label>
                            <input type="text" name="numeroAfore" class="form-control"  value="{{$edit->numeroAfore}}" >
                            @if($errors->get('numeroAfore'))  
                            <div class="alert alert-danger">{{ $errors->get('numeroAfore')[0]}}</div>
                            @endif
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-control-label" >Numero Fonacot :</label>
                            <input type="text" name="numeroFonacot" class="form-control"  value="{{$edit->numeroFonacot}}">
                            @if($errors->get('numeroFonacot'))  
                            <div class="alert alert-danger">{{ $errors->get('numeroFonacot')[0]}}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label class="form-control-label" >Correo electrónico:</label>
                            <input type="email" name="correoElectronico" class="form-control"  value="{{$edit->correoElectronico}}">
                            @if($errors->get('correoElectronico'))  
                            <div class="alert alert-danger">{{ $errors->get('correoElectronico')[0]}}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label class=" form-control-label" >Clabe Interbancaria:</label>
                            <input type="text"  name="clabeInterbancaria" class="form-control"  value="{{$edit->clabeInterbancaria}}">
                            @if($errors->get('clabeInterbancaria'))  
                            <div class="alert alert-danger">{{ $errors->get('clabeInterbancaria')[0]}}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label class="form-control-label" >Entidad Federativa:</label>
                            <input type="text" name="entidadFederativa" class="form-control" value="{{$edit->entidadFederativa}}">
                        </div>
                    </div>
                    <hr>
                    <a  href="/empleados" class="btn btn-secondary" >Regresar</a>
                    <button type="submit"    class="btn btn-success" >Guardar</button>
            <!-- fin de lo chido -->
            </form>
        </div>
    </div>
</div>
</div>
@endsection