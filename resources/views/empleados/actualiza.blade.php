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
                @if(count($errors))
                <div class="alert alert-danger">Ha ocurrido algo, verifica tus valores de ingreso</div>
                @endif
                <a class="pull-right" href="{{route('empleados')}}">Regresar</a>
            </div>
            <div class="card-body">
                <form id="add" action="{{route('updateEmpleados').'/update/'.$edit->idEmpleado}}" method="post" enctype="multipart/form-data" >
                   <!-- <input id="token" name="_token" value="{{csrf_token()}}" hidden="true"/>-->
                    {{ csrf_field() }}
                    <!-- Aqui vamos a empezar a poner esto bonito-->
                    <input name='idEmpleado' value="{{$edit->idEmpleado}}" type="hidden"/>
                    <div class="container">
                        <i>NOTA: Los campos con <i class="text-danger">*</i> son obligatorios.</i>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <p align="center">
                                    <label class="form-control-label">Fotografía:</label>
                                </p>
                                @if(!$edit->fotografia)
                                <p align="center">
                                    <img id="imgSalida" src="/images/usr.png" alt="{{$edit->idEmpleado}}" height="15%" width="30%"/>
                                </p>
                                @else
                                <p align="center">
                                    <img id="imgSalida" src="/img/empleados/{{$edit->fotografia}}" alt="{{$edit->idEmpleado}}" height="15%" width="30%"/>
                                </p>
                                @endif
                                <input id="file-input" type="file" name="fotografia"/>
                            </div>
                        </div>
                        <h4 class="text text-primary">Datos Personales</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-control-label" for="text-input">Codigo Empleado:</label>
                                <input minlength="4"  maxlength="30" type="text"  name="codigoEmpleado" class="form-control text text-uppercase" value="{{old('codigoEmpleado',$edit->codigoEmpleado)}}" >
                                <div class="alert alert-danger">{{ $errors->get('codigoEmpleado')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label"><i class="text-danger">*</i> Nombre:</label>
                                <input  minlength="4"  maxlength="40" type="text" name="nombre" class="form-control text text-uppercase" value="{{old('nombre',$edit->nombre)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label"><i class="text-danger">*</i> Apellido Paterno:</label>
                                <input minlength="4"  maxlength="40" type="text"  name="apellidoPaterno" class="form-control text text-uppercase" value="{{old('apellidoPaterno',$edit->apellidoPaterno)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label"><i class="text-danger">*</i> Apellido Materno:</label>
                                <input  minlength="4"  maxlength="40" type="text"  name="apellidoMaterno" class="form-control text text-uppercase" value="{{old('apellidoMaterno',$edit->apellidoMaterno)}}" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Fecha Nacimiento:</label>
                                <input  minlength="4"  maxlength="40" type="date"  name="fechaNacimiento" class="form-control" value="{{old('fechaNacimiento',$edit->fechaNacimiento)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Lugar Nacimiento:</label>
                                <input  maxlength="40" type="text" name="lugarNacimiento" class="form-control text text-uppercase" value="{{old('lugarNacimiento',$edit->lugarNacimiento)}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Estado civil:</label>
                                <select name="estadoCivil" class="form-control" required >
                                    <option></option>
                                    <option value="SOLTERO (A)" {{old('estadoCivil', $edit->estadoCivil)=='SOLTERO (A)' ? 'selected' : ''}}>SOLTERO (A)</option>
                                    <option value="CASADO (A)" {{old('estadoCivil', $edit->estadoCivil)=='CASADO (A)' ? 'selected' : ''}} >CASADO (A)</option>
                                    <option value="VIUDO (A)" {{old('estadoCivil', $edit->estadoCivil)=='VIUDO (A)' ? 'selected' : ''}}>VIUDO (A)</option>
                                    <option value="DIVORCIADO (A)" {{old('estadoCivil', $edit->estadoCivil)=='DIVORCIADO (A)' ? 'selected' : ''}}>DIVORCIADO (A)</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Sexo:</label>
                                <select name="sexo" class="form-control" required/>
                                <option></option>
                                <option value="MASCULINO"  {{old('sexo',$edit->sexo)=='MASCULINO' ? 'selected' : ''}}>MASCULINO</option>
                                <option value="FEMENINO"   {{old('sexo',$edit->sexo)=='FEMENINO' ? 'selected' : ''}} >FEMENINO</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Nombre Padre:</label>
                                <input minlength="4"  maxlength="40" type="text" name="nombrePadre" class="form-control text text-uppercase"  value="{{old('nombrePadre',$edit->nombrePadre)}}" required />
                            </div>
                            <div class="col-md-6">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Nombre Madre:</label>
                                <input minlength="4"  maxlength="40" type="text"  name="nombreMadre" class="form-control text text-uppercase"  value="{{old('nombreMadre',$edit->nombreMadre)}}" required />
                            </div>
                        </div>
                        <hr/>
                        <h4 class="text text-primary">Datos Generales</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-control-label" ><i class="text-danger">*</i> Curp:</label>
                                <input   minlength="18"  maxlength="30" name="curp" class="form-control text text-uppercase" value="{{old('curp',$edit->curp)}}"required />
                                @if($errors->get('curp'))  
                                <div class="alert alert-danger">{{ $errors->get('curp')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Rfc:</label>
                                <input minlength="4"  maxlength="12" type="text"  name="rfc" class="form-control text text-uppercase" value="{{old('rfc',$edit->rfc)}}" required>
                                @if($errors->get('rfc'))  
                                <div class="alert alert-danger">{{ $errors->get('rfc')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero Seguro Social:</label>
                                <input maxlength="15" type="text" name="numeroSeguroSocial" class="form-control text text-uppercase" value="{{old('numeroSeguroSocial',$edit->numeroSeguroSocial)}}">
                                @if($errors->get('numeroSeguroSocial'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroSeguroSocial')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <label class="form-control-label" >Umf:</label>
                                <input maxlength="11" type="number"  name="umf" class="form-control text text-uppercase" value="{{old('umf',$edit->umf)}}">
                                @if($errors->get('umf'))  
                                <div class="alert alert-danger">{{ $errors->get('umf')[0]}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero de Afore :</label>
                                <input minlength="4"  maxlength="40" type="text" name="numeroAfore" class="form-control text text-uppercase"  value="{{old('numeroAfore',$edit->numeroAfore)}}" >
                                @if($errors->get('numeroAfore'))
                                <div class="alert alert-danger">{{ $errors->get('numeroAfore')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Numero Fonacot :</label>
                                <input minlength="4"  maxlength="40" type="text" name="numeroFonacot" class="form-control text text-uppercase"  value="{{old('numeroFonacot',$edit->numeroFonacot)}}">
                                @if($errors->get('numeroFonacot'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroFonacot')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Clabe Interbancaria:</label>
                                <input  minlength="18"  maxlength="25" type="text"  name="clabeInterbancaria" class="form-control text text-uppercase"  value="{{old('clabeInterbancaria',$edit->clabeInterbancaria)}}" >
                                @if($errors->get('clabeInterbancaria'))  
                                <div class="alert alert-danger">{{ $errors->get('clabeInterbancaria')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Tipo contrato:</label>
                                <select name="tipoContrato" class="form-control" required />
                                <option></option>
                                <option  value="1" {{old('tipoContrato',$edit->tipoContrato)==1 ? 'selected' : ''}}>BIMESTRAL</option>
                                <option  value="2" {{old('tipoContrato',$edit->tipoContrato)==2 ? 'selected' : ''}}>SEMESTRAL</option>
                                <option  value="3" {{old('tipoContrato',$edit->tipoContrato)==3 ? 'selected' : ''}}>ANUAL</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label class=" form-control-label" >Expediente :</label>
                                <textarea maxlength="500" type="text"  name="expediente" class="form-control text text-uppercase">{{old('expediente',$edit->expediente)}}</textarea>
                            </div> 
                        </div>
                        <hr/>
                        <h4 class="text text-primary">Domicilio Actual</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-control-label" ><i class="text-danger">*</i> Dirección :</label>
                                <input  minlength="4"  maxlength="60" type="text"  name="direccion" class="form-control text text-uppercase"  value="{{old('direccion',$edit->direccion)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Población:</label>
                                <input  minlength="4"  maxlength="60" type="text" name="poblacion" class="form-control text text-uppercase"  value="{{old('poblacion',$edit->poblacion)}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Entidad Federativa:</label>
                                <select name="entidadFederativa" class="form-control" required>
                                    <option></option>
                                    @foreach($estados as $item)
                                    <option class="form-control" value="{{$item->id}}" {{ old('entidadFederativa',$edit->entidadFederativa)==$item->id ? 'selected' : ''}}>{{$item->estado}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control-label" ><i class="text-danger">*</i> Código Postal:</label>
                            <input  minlength="4"  maxlength="11" type="number" name="codigoPostal" class="form-control"  value="{{old('codigoPostal',$edit->codigoPostal)}}"required/>
                        </div>
                        <div class="col-md-4">
                            <label class=" form-control-label" ><i class="text-danger">*</i> Telefono :</label>
                            <input  minlength="10"  maxlength="15" type="text"  name="telefono" class="form-control" value="{{old('telefono',$edit->telefono)}}"required />
                        </div>
                        <div class="col-md-4">
                            <label class="form-control-label" ><i class="text-danger">*</i> Correo electrónico:</label>
                            <input minlength="8"  maxlength="40" type="email" name="correoElectronico" class="form-control"  value="{{old('correoElectronico',$edit->correoElectronico)}}" required>
                            @if($errors->get('correoElectronico'))  
                            <div class="alert alert-danger">{{ $errors->get('correoElectronico')[0]}}</div>
                            @endif
                        </div>
                    </div>
                    <hr/>
                    <a  href="/empleados" class="btn btn-secondary" >Regresar</a>
                    <button type="submit"    class="btn btn-success" >Guardar</button>
                    <!-- fin de lo chido -->
            </form>
        </div>
    </div>
</div>
</div>
<!--Aqui va el codigo para el efecto de la imagen previa del perfil -->
<script type="text/javascript">

    $(window).load(function () {

        /*Empieza el show de la imagen con un preview show*/
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
