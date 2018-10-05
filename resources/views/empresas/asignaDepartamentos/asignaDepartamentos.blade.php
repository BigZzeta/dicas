@extends('../../inicio')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h2>Asignar Departamentos a las Empresas</h2></div>
        <div class="card-body">
            <form action="#" >
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-3" >
                        <label class="text">Empresa: </label>
                        <select name="empresa" class="form-control">
                            @foreach($empresas as $item)
                            <option value="{{$item->idune}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3" >
                        <label class="text">Departamento: </label>
                        <select name="departamento" class="form-control">
                            @foreach($departamentos as $item)
                            <option value="{{$item->idcatdepartamento}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3" >
                        <label class="text">Numero de Puestos:</label>
                        <input type="number" class="form-control" />
                    </div>
                    <div class="col-md-3" ></div>
                </div>
                <div class="row">
                    <div class="col-md-3" ></div>
                    <div class="col-md-3" ></div>
                    <div class="col-md-3" ></div>
                    <div class="col-md-3" ></div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-secondary btn-xs">Aceptar</button>
            <button type="reset" class="btn btn-danger btn-xs">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection