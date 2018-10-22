@extends('../../inicio')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h2>Asignar Departamentos a las Empresas</h2></div>
        <div class="card-body">
            <form id="depa" action="{{route('creaDepaEmpresa')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4" >
                        <label class="text">Empresa: </label>
                        <select name="empresa" class="form-control" onchange="validaDepartamento()">
                            @foreach($empresas as $item)
                            <option value="{{$item->idune}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4" >
                        <label class="text">Departamento: </label>
                        <select name="departamento" class="form-control" onchange="validaDepartamento()">
                            <option value="0"></option>
                            @foreach($departamentos as $item)
                            <option value="{{$item->idcatdepartamento}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                        <div id="replica_D" class="tex text-danger"></div>
                    </div>
                    <!-- <div class="col-md-4" >
                         <label class="text">Numero de Puesto :</label>
                         <input id="puesto" name="numPuestos" type="number" class="form-control" onfocus="accion()" placeholder="0"/>
                     </div>-->
                </div>
                <label class="text" style="margin-top: 12px;">Seleccion los Puestos a Asignar:</label>
                <div class="row" style="margin-top: 15px;">
                    @foreach($puestos as $item)
                    <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input onclick="(this.checked==true) ? activaNum('num{{$item->idpuesto}}') : desactivaNum('num{{$item->idpuesto}}')" name="puesto[]" class="form-check-input" type="checkbox" value="{{$item->idpuesto}}" /> {{$item->nombre}}
                            </label>
                        </div>
                        <div class="col-md-4" id="num{{$item->idpuesto}}" style="display: none;">
                            <input class="form-control" name="num_empleados[{{$item->idpuesto}}]" type="number" />
                            Num. Empleados
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--<div id="form-puesto" class="col-md-4 cp" style="display: none">
                    <label class="form">Nombre Puesto:</label>
                    <select name="puesto[]" class="form-control">
                        @foreach($puestos as $item)
                        <option value="{{$item->idpuesto}}" >{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div> <hr/><div id="numPuestos" class="row"></div></div> --><!--Area para poner los puestos -->
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-secondary btn-xs">Aceptar</button>
            <button type="reset" class="btn btn-danger btn-xs">Cancelar</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    function activaNum(dato){
    var id = document.getElementById(dato);
    id.style.display = "inline";
    }
    function desactivaNum(dato){
    var id = document.getElementById(dato);
    id.style.display = "none";
    }

    //Ajax para validar si la empresa ya tiene dado de alta el departamento seleccionado
    function validaDepartamento(){
    var depa = document.getElementsByName('departamento');
    var emp = document.getElementsByName('empresa');
    if (depa[0].value === '0'){
    alert('selecciona un campo valido');
    } else{
    var data = $('#depa').serialize();
    $.post('/empresa/validaDepa', data, function(recibe){
        if(recibe==='Si hay replica'){
            document.getElementById('replica_D').textContent="Ya existe este departamento con esta empresa seleccionada";
        }else{
            document.getElementById('replica_D').innerHTML="";
        }
    });
    }
    }

    /*
     var tiempo;
     var anterior = 0;
     function  accion() {
     tiempo = setInterval(detectarCambio, 2000);
     }
     function clonado(puestos) {
     var area = document.getElementById('numPuestos');
     var nodo = document.getElementById('form-puesto');
     var copia = nodo.cloneNode(true);
     copia.style.display = "inline";
     for (i = 0; i < puestos; i++) {
     copia.children[0].textContent = "Nombre del Puesto: " + (i + 1);
     area.appendChild(copia.cloneNode(true));
     }
     }
     function detectarCambio() {
     var num = document.getElementById('puesto');
     if (num.value > 0) {
     if (num.value != anterior) {
     eliminarClon(); //para limpiar el buffer con el nuevo dato
     clonado(num.value);
     anterior = num.value;
     }
     } else if (num.value >= 0 && anterior > 0) {
     eliminarClon();
     anterior = num.value;
     }
     }
     function eliminarClon() {
     var drop = document.querySelectorAll(".cp");
     var nodoElimina;
     for (i = drop.length - 1; i >= 1; i--) {
     nodoElimina = drop[i];
     nodoElimina.parentNode.removeChild(nodoElimina);
     }
     }*/
</script>
@endsection