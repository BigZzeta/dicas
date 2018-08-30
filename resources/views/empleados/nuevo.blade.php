@extends('inicio')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-md-offset-1">
        <div class="card mb-3">
            <div class="card-header">
                {{--  @include('errors.error') --}}
                <h3>
                    <i class="fa fa-user-plus"></i> Nuevos Empleados
                </h3>
                <a class="pull-right" href="/empleados">Regresar</a>
                @if(count($errors))
                <div class="alert alert-danger">Ha ocurrido algo, verifica tus valores de ingreso</div>
                @endif
            </div>
            <div class="card-body">
                <form id="add" action="{{route('addEmpleados').'/1'}}" method="post" enctype="multipart/form-data" >
                   <!-- <input id="token" name="_token" value="{{csrf_token()}}" hidden="true"/>-->
                    {{ csrf_field() }}
                    <!-- aqui vamos acomodando el codigo-->
                    <div class="container">
                        <i>NOTA: Los campos con <i class="text-danger">*</i> son obligatorios.</i>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <p align="center">
                                    <label class="form-control-label">Fotografía:</label>
                                    <img id="imgSalida" src="{{asset('images/usr.png')}}"  height="15%" width="30%"/>
<<<<<<< HEAD
                                    <input id="file-input" type="file" name="fotografia"/>  
=======
                                    <input id="file-input" type="file" name="fotografia"/>
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                </p>
                            </div>
                        </div>
                        <h4 class="text text-primary">Datos Personales</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-control-label">Codigo Empleado:</label>
                                <input minlength="4" maxlength="30" type="text"  name="codigoEmpleado" class="form-control text text-uppercase" value="{{ old('codigoEmpleado') }}"  />
<<<<<<< HEAD
                                @if($errors->get('codigoEmpleado'))  
=======
                                @if($errors->get('codigoEmpleado'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('codigoEmpleado')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label"><i class="text-danger">*</i> Nombre:</label>
                                <input minlength="4" maxlength="40" type="text" name="nombre" class="form-control text text-uppercase" value="{{ old('nombre') }}" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label"><i class="text-danger">*</i> Apellido Paterno:</label>
                                <input minlength="4" maxlength="40" type="text"  name="apellidoPaterno" class="form-control text text-uppercase" value="{{ old('apellidoPaterno') }}" required />
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label"><i class="text-danger">*</i> Apellido Materno:</label>
                                <input minlength="4" maxlength="40"  type="text"  name="apellidoMaterno" class="form-control text text-uppercase"  value="{{ old('apellidoMaterno') }}" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Fecha Nacimiento:</label>
                                <input type="date"  name="fechaNacimiento" class="form-control" value="{{ old('fechaNacimiento') }}" required />
                            </div>

                            <div class="col-md-3">
                                <label class=" form-control-label" >Lugar Nacimiento:</label>
                                <input  maxlength="40" type="text" name="lugarNacimiento" class="form-control text text-uppercase" value="{{ old('lugarNacimiento') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Estado civil:</label>
                                <select  name="estadoCivil" class="form-control" required >
                                    <option> </option>
                                    <option value="SOLTERO (A)" {{old('estadoCivil')=='SOLTERO (A)' ? 'selected' : ''}}>SOLTERO (A)</option>
                                    <option value="CASADO (A)"{{old('estadoCivil')=='CASADO (A)' ? 'selected' : ''}} >CASADO (A)</option>
                                    <option value="VIUDO (A)" {{old('estadoCivil')=='VIUDO (A)' ? 'selected' : ''}}>VIUDO (A)</option>
                                    <option value="DIVORCIADO (A)" {{old('estadoCivil')=='DIVORCIADO (A)' ? 'selected' : ''}}>DIVORCIADO (A)</option>
<<<<<<< HEAD
=======
                                    <option value="UNION LIBRE" {{old('estadoCivil')=='UNION LIBRE (A)' ? 'selected' : ''}}>UNION LIBRE</option>
                                    <option value="OTRO" {{old('estadoCivil')=='OTRO' ? 'selected' : ''}}>OTRO</option>
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Sexo:</label>
                                <select name="sexo" class="form-control" required />
                                <option></option>
<<<<<<< HEAD
                                <option  value="MASCULINO" {{old('sexo')=='MASCULINO' ? 'selected' : ''}} >MASCULINO</option>
                                <option  value="FEMENINO" {{old('sexo')=='FEMENINO' ? 'selected' : ''}} >FEMENINO</option>
=======
                                <option label="MASCULINO" value="MASCULINO" {{old('sexo')=='MASCULINO' ? 'selected' : ''}} >MASCULINO </option>
                                <option label="FEMENINO" value="FEMENINO" {{old('sexo')=='FEMENINO' ? 'selected' : ''}} >FEMENINO </option>
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Nombre Padre:</label>
                                <input minlength="4" maxlength="40" type="text" name="nombrePadre" class="form-control text text-uppercase" value="{{ old('nombrePadre') }}" required />
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label" ><i class="text-danger">*</i> Nombre Madre:</label>
                                <input minlength="4" maxlength="40" type="text"  name="nombreMadre" class="form-control text text-uppercase" value="{{ old('nombreMadre') }}" required />
                            </div>
                        </div>
                        <hr/>
                        <h4 class="text text-primary">Datos Generales</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Curp:</label>
                                <input minlength="18" maxlength="30"   name="curp" class="form-control text text-uppercase" value="{{ old('curp') }}"   required />
<<<<<<< HEAD
                                @if($errors->get('curp'))  
=======
                                @if($errors->get('curp'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('curp')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Rfc:</label>
                                <input minlength="4" maxlength="12" type="text"  name="rfc" class="form-control text text-uppercase" value="{{ old('rfc') }}" required />
<<<<<<< HEAD
                                @if($errors->get('rfc'))  
=======
                                @if($errors->get('rfc'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('rfc')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero Seguro Social:</label>
                                <input maxlength="15" type="text" name="numeroSeguroSocial" class="form-control text text-uppercase" value="{{ old('numeroSeguroSocial') }}" >
<<<<<<< HEAD
                                @if($errors->get('numeroSeguroSocial'))  
=======
                                @if($errors->get('numeroSeguroSocial'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('numeroSeguroSocial')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <label class=" form-control-label" >Umf:</label>
                                <input  maxlength="11"  name="umf" class="form-control text text-uppercase" value="{{ old('umf') }}">
<<<<<<< HEAD
                                @if($errors->get('umf'))  
=======
                                @if($errors->get('umf'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('umf')[0]}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero de Afore :</label>
                                <input maxlength="40" type="text" name="numeroAfore" class="form-control text text-uppercase" value="{{ old('numeroAfore') }}" >
<<<<<<< HEAD
                                @if($errors->get('numeroAfore'))  
=======
                                @if($errors->get('numeroAfore'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('numeroAfore')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero Fonacot :</label>
                                <input  maxlength="40"  type="text" name="numeroFonacot" class="form-control text text-uppercase" value="{{ old('numeroFonacot') }}">
<<<<<<< HEAD
                                @if($errors->get('numeroFonacot'))  
=======
                                @if($errors->get('numeroFonacot'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('numeroFonacot')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
<<<<<<< HEAD
                                <label class="form-control-label" >Clabe Interbancaria:</label>
                                <input minlength="4" maxlength="25"  type="text"  name="clabeInterbancaria" class="form-control text text-uppercase" value="{{ old('clabeInterbancaria') }}" />
                                @if($errors->get('clabeInterbancaria'))  
=======
                                <label class="form-control-label" ><i class="text-danger">*</i> Clabe Interbancaria:</label>
                                <input minlength="4" maxlength="25"  type="text"  name="clabeInterbancaria" class="form-control text text-uppercase" value="{{ old('clabeInterbancaria') }}" required />
                                @if($errors->get('clabeInterbancaria'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('clabeInterbancaria')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Tipo contrato:</label>
                                <select  name="tipoContrato" class="form-control" required />
                                <option></option>
<<<<<<< HEAD
                                <option  value="1" {{old('tipoContrato')==1 ? 'selected' : ''}}>BIMESTRAL</option>
                                <option  value="2" {{old('tipoContrato')==2 ? 'selected' : ''}}>SEMESTRAL</option>
                                <option  value="3" {{old('tipoContrato')==3 ? 'selected' : ''}}>ANUAL</option>
=======
                                <option  value="1" {{old('tipoContrato')==1 ? 'selected' : ''}}>POR TIEMPO DETERMINADO</option>
                                <option  value="2" {{old('tipoContrato')==2 ? 'selected' : ''}}>INDETERMINADO</option>
                                <!-- <option  value="3" {{old('tipoContrato')==3 ? 'selected' : ''}}>POR CAPACITACION</option> -->
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label class=" form-control-label" >Expediente :</label>
                                <textarea maxlength="500"  name="expediente" class="form-control text text-uppercase">{{ old('expediente') }}</textarea>
                            </div>
                        </div>
                        <hr/>
                        <h4 class="text text-primary">Domicilio Actual</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-control-label" ><i class="text-danger">*</i> Dirección :</label>
                                <input minlength="10" maxlength="100"  type="text"  name="direccion" class="form-control text text-uppercase" value="{{ old('direccion') }}" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Población:</label>
                                <input  maxlength="60"  type="text" name="poblacion" class="form-control text text-uppercase" value="{{ old('poblacion') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Entidad Federativa:</label>
                                <select name="entidadFederativa" class="form-control" required>
                                    <option></option>
                                    @foreach($estados as $item)
<<<<<<< HEAD
                                    <option class="form-control" value="{{$item->id}}" {{ old('entidadFederativa')==$item->id ? 'selected' : ''}} >{{$item->estado}}</option>
=======
                                    <option class="form-control" value="{{$item->id}}" label="{{$item->estado}}" {{ old('entidadFederativa')==$item->id ? 'selected' : ''}} >{{$item->estado}} </option>
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Código Postal:</label>
                                <input minlength="5" maxlength="11" type="number" name="codigoPostal" class="form-control text text-uppercase" value="{{ old('codigoPostal') }}" required />
                            </div>
                            <div class="col-md-4">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Telefono :</label>
                                <input minlength="10" maxlength="15"  type="text"  name="telefono" class="form-control" value="{{ old('telefono') }}" required />
                            </div>
                            <div class="col-md-4">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Correo electrónico:</label>
                                <input  maxlength="40"  type="email" name="correoElectronico" class="form-control" value="{{ old('correoElectronico') }}" required />
<<<<<<< HEAD
                                @if($errors->get('correoElectronico'))  
=======
                                @if($errors->get('correoElectronico'))
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
                                <div class="alert alert-danger">{{ $errors->get('correoElectronico')[0]}}</div>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <button id="close_add" type="reset" class="btn btn-secondary" >Borrar</button>
                        <button type="submit"    class="btn btn-success" >Guardar</button>
                        <a class="pull-right" href="/empleados">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Aqui va el codigo para el efecto de la imagen previa del perfil -->
<script type="text/javascript">
    $(window).load(function () {
        $(function () {
            $('#file-input').change(function (e) {
                addImage(e);
            });
            function addImage(e) {
                var file = e.target.files[0],
                        imageType = /image.*/;
                if (!file.type.match(imageType))
                    return;
                var reader = new FileReader();
                reader.onload = fileOnload;
                reader.readAsDataURL(file);
            }

            function fileOnload(e) {
                var result = e.target.result;
                $('#imgSalida').attr("src", result);
            }
        });
    });
</script>
@endsection
<<<<<<< HEAD

=======
>>>>>>> 774ce2983090cd240c050ac0798b43b8853a118f
