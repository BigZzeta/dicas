@extends('../../inicio')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card card-header">
                    <span> <h4> <i class="fa fa-address-book-o"></i> Asignar Puestos a los Empleados</h4></span>
                </div>
                <form id="form_p" class="form-control" method="POST" action="/empresa/vp_depa">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="text">Selecciona el empleado: </label>
                                <select id="trabajador" class="form-control" name="empleado" onchange="cambiaE()">
                                    <option value="0"></option>
                                    @foreach($empleados as $item)
                                    <option value="{{$item->idempleado}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="emp" class="col-md-4" style="display: none">
                                <label class="text">
                                    Selecciona la Empresa:
                                </label>  
                                <select class="form-control" name="empresa" onchange="cargaDepa()">
                                    <option value="0"></option>
                                    @foreach($unes as $item)
                                    <option value="{{$item->idune}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="dpa" class="col-md-4" style="display: none">
                                <label class="text">
                                    Selecciona el Departamento:
                                </label>  
                                <select class="form-control" name="departamento" onchange="cargaDepa()">
                                    <option value="0"></option>
                                    @foreach($unes as $item)
                                    <option value="{{$item->idune}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-dark">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function cambiaE() {
        var empl = document.getElementById('trabajador');
        if (empl.value === '0') {
            emp.style.display = "none";
        } else {
            var empresa = document.getElementById('emp');
            empresa.style.display = "inline";
        }
    }
    /*ajax para validar los departamentos que tiene dado de alta cada empresa*/
    function cargaDepa() {
        var form=$('#form_p');
        var data=form.serialize();
        var url=form.attr('action');
       $.post(url,data,function(recibe){
         alert(recibe);  
       });
    }
</script>
@endsection