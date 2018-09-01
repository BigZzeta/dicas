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
                                  @if($errors->get('codigoEmpleado'))  
                                <div class="alert alert-danger">{{ $errors->get('codigoEmpleado')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" for="text-input"><i class="text-danger">*</i> Nombre:</label>
                                <input  minlength="4"  maxlength="40" type="text" name="nombre" class="form-control text" value="{{old('nombre',$edit->nombre)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label"><i class="text-danger">*</i> Apellido Paterno:</label>
                                <input minlength="4"  maxlength="40" type="text"  name="apellidoPaterno" class="form-control text" value="{{old('apellidoPaterno',$edit->apellidoPaterno)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label"><i class="text-danger">*</i> Apellido Materno:</label>
                                <input  minlength="4"  maxlength="40" type="text"  name="apellidoMaterno" class="form-control text " value="{{old('apellidoMaterno',$edit->apellidoMaterno)}}" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Fecha Nacimiento:</label>
                                <input  minlength="4"  maxlength="40" type="date"  name="fechaNacimiento" class="form-control" value="{{old('fechaNacimiento',$edit->fechaNacimiento)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Lugar Nacimiento:</label>
                                <input  maxlength="40" type="text" name="lugarNacimiento" class="form-control text" value="{{old('lugarNacimiento',$edit->lugarNacimiento)}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Estado civil:</label>
                                <select name="estadoCivil" class="form-control" required >
                                    <option></option>
                                    <option value="Soltero (a)" {{old('estadoCivil', $edit->estadoCivil)=='Soltero (a)' ? 'selected' : ''}}>Soltero (a)</option>
                                    <option value="Casado (a)" {{old('estadoCivil', $edit->estadoCivil)=='Casado (a)' ? 'selected' : ''}} >Casado (a)</option>
                                    <option value="Viudo (a)" {{old('estadoCivil', $edit->estadoCivil)=='Viudo (a)' ? 'selected' : ''}}>Viudo (a)</option>
                                    <option value="Divorciado (a)" {{old('estadoCivil', $edit->estadoCivil)=='Divorciado (a)' ? 'selected' : ''}}>Divorciado (a)</option>
                                    <option value="Unión Libre" {{old('estadoCivil', $edit->estadoCivil)=='Unión Libre' ? 'selected' : ''}}>Union Libre</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text-danger">*</i> Sexo:</label>
                                <select name="sexo" class="form-control" required/>
                                <option></option>
                                <option value="Masculino"  {{old('sexo',$edit->sexo)=='Masculino' ? 'selected' : ''}}>Masculino</option>
                                <option value="Femenino"   {{old('sexo',$edit->sexo)=='Femenino' ? 'selected' : ''}} >Femenino</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Nombre Padre:</label>
                                <input minlength="4"  maxlength="40" type="text" name="nombrePadre" class="form-control text"  value="{{old('nombrePadre',$edit->nombrePadre)}}" required />
                            </div>
                            <div class="col-md-6">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Nombre Madre:</label>
                                <input minlength="4"  maxlength="40" type="text"  name="nombreMadre" class="form-control text"  value="{{old('nombreMadre',$edit->nombreMadre)}}" required />
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
                                <input minlength="4"  maxlength="12" type="text"  name="rfc" class="form-control text" value="{{old('rfc',$edit->rfc)}}" required>
                                @if($errors->get('rfc'))  
                                <div class="alert alert-danger">{{ $errors->get('rfc')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero Seguro Social:</label>
                                <input maxlength="15" type="text" name="numeroSeguroSocial" class="form-control text" value="{{old('numeroSeguroSocial',$edit->numeroSeguroSocial)}}">
                                @if($errors->get('numeroSeguroSocial'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroSeguroSocial')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <label class="form-control-label" >Umf:</label>
                                <input maxlength="11" type="number"  name="umf" class="form-control text" value="{{old('umf',$edit->umf)}}">
                                @if($errors->get('umf'))  
                                <div class="alert alert-danger">{{ $errors->get('umf')[0]}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class=" form-control-label" >Numero de Afore :</label>
                                <input minlength="4"  maxlength="40" type="text" name="numeroAfore" class="form-control text"  value="{{old('numeroAfore',$edit->numeroAfore)}}" >
                                @if($errors->get('numeroAfore'))
                                <div class="alert alert-danger">{{ $errors->get('numeroAfore')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" >Numero Fonacot :</label>
                                <input minlength="4"  maxlength="40" type="text" name="numeroFonacot" class="form-control text"  value="{{old('numeroFonacot',$edit->numeroFonacot)}}">
                                @if($errors->get('numeroFonacot'))  
                                <div class="alert alert-danger">{{ $errors->get('numeroFonacot')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Clabe Interbancaria:</label>
                                <input  minlength="18"  maxlength="25" type="text"  name="clabeInterbancaria" class="form-control text"  value="{{old('clabeInterbancaria',$edit->clabeInterbancaria)}}" >
                                @if($errors->get('clabeInterbancaria'))  
                                <div class="alert alert-danger">{{ $errors->get('clabeInterbancaria')[0]}}</div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" ><i class="text-danger">*</i> Tipo contrato:</label>
                                <select name="tipoContrato" class="form-control" required />
                                <option></option>
                                <option  value="1" {{old('tipoContrato',$edit->tipoContrato)==1 ? 'selected' : ''}}>Bimestral</option>
                                <option  value="2" {{old('tipoContrato',$edit->tipoContrato)==2 ? 'selected' : ''}}>Semestral</option>
                                <option  value="3" {{old('tipoContrato',$edit->tipoContrato)==3 ? 'selected' : ''}}>Anual</option>
                                <option  value="4" {{old('tipoContrato',$edit->tipoContrato)==4 ? 'selected' : ''}}>Por tiempo determinado</option>
                                <option  value="5" {{old('tipoContrato',$edit->tipoContrato)==5 ? 'selected' : ''}}>Indeterminado</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label class=" form-control-label" >Expediente :</label>
                                <textarea maxlength="500" type="text"  name="expediente" class="form-control text">{{old('expediente',$edit->expediente)}}</textarea>
                            </div> 
                        </div>
                        <hr/>
                        <h4 class="text text-primary">Domicilio Actual</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-control-label" ><i class="text-danger">*</i> Dirección :</label>
                                <input  minlength="4"  maxlength="60" type="text"  name="direccion" class="form-control text"  value="{{old('direccion',$edit->direccion)}}" required />
                            </div>
                            <div class="col-md-3">
                                <label class=" form-control-label" >Población:</label>
                                <input  minlength="4"  maxlength="60" type="text" name="poblacion" class="form-control text"  value="{{old('poblacion',$edit->poblacion)}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label" ><i class="text text-danger">*</i> Entidad Federativa:</label>
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
