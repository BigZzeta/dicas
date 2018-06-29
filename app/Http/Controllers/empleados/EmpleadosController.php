<?php

namespace App\Http\Controllers\empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* vamos a usar el modelo */
use App\Empleado;

class EmpleadosController extends Controller {

    public function index() {
        $datos = Empleado::all();
        return view('empleados.empleados')->with("empleados", $datos);
    }

    public function add(Request $request) {
        if ($request->ajax()) {
            /* todo el desmadre */
            try{
            $empleados = new Empleado();

            $valrepeat= Empleado::where('codigoEmpleado',$request->input('codigoEmpleado'))->get();
            
            if(!$valrepeat->isEmpty()){
                return response()->json(['msj' =>'ya existe un registro con el codigo : '.$request->input('codigoEmpleado')]);
            }else{
            
            $empleados->idEmpleado = 0;
            $empleados->codigoEmpleado = $request->input('codigoEmpleado');
            $empleados->nombre = $request->input('nombre');
            $empleados->fotografia = $request->input('fotografia');
            $empleados->apellidoPaterno = $request->input('apellidoPaterno');
            $empleados->apellidoMaterno = $request->input('apellidoMaterno');
            $empleados->fechaNacimiento = null;
            $empleados->estadoCivil = $request->input('estadoCivil');
            $empleados->sexo = $request->input('sexo');
            $empleados->curpi = $request->input('curpi');
            $empleados->curpf = $request->input('curpf');
            $empleados->numeroSeguroSocial = $request->input('numeroSeguroSocial');
//$empleados->umf=$request->input('umf');
            $empleados->umf = 12;
            $empleados->rfc = $request->input('rfc');
            $empleados->homoclave = $request->input('homoclave');
            $empleados->tipoContrato = $request->input('tipoContrato');
            $empleados->expediente = $request->input('expediente');
            $empleados->telefono = $request->input('telefono');
//$empleados->codigoPostal=$request->input('codigoPostal');
            $empleados->codigoPostal = 86930;
            $empleados->direccion = $request->input('direccion');
            $empleados->poblacion = $request->input('poblacion');
            $empleados->estado = $request->input('estado');
            $empleados->nombrePadre = $request->input('nombrePadre');
            $empleados->nombreMadre = $request->input('nombreMadre');
            $empleados->numeroAfore = $request->input('numeroAfore');
            $empleados->numeroFonacot = $request->input('numeroFonacot');
            $empleados->correoElectronico = $request->input('correoElectronico');
            $empleados->clabeInterbancaria = $request->input('clabeInterbancaria');
            $empleados->entidadFederativa = $request->input('entidadFederativa');
            $empleados->registro = null;
            $empleados->save();
            }
            } catch (Exception $e){
                return response()->json(['msj' =>$e->getMessage()]);
            }
           return response()->json(['msj' =>'Guardado correctamente']);
        }
    }

}
