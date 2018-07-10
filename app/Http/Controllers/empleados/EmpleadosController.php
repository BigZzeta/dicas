<?php

namespace App\Http\Controllers\empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* vamos a usar el modelo */
use App\Empleado;

<<<<<<< HEAD
/* vamos a implementar el reaquest */
use App\Http\Requests\EmpleadoRequest;

class EmpleadosController extends Controller {

    public function index2() {
        // $datos = Empleado::all();
        echo "ejemplo";
    }

=======
class EmpleadosController extends Controller {

>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
    public function index() {
        $datos = Empleado::all();
        return view('empleados.empleados')->with("empleados", $datos);
    }

<<<<<<< HEAD
    public function add(EmpleadoRequest $request, $id = 0) {
        if ($id != 0) {
            $empleados = new Empleado();
            $empleados->idEmpleado = 0;
            $empleados->codigoEmpleado = ($request->input('codigoEmpleado') == '') ? null : $request->input('codigoEmpleado');
=======
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
>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
            $empleados->nombre = $request->input('nombre');
            $empleados->fotografia = $request->input('fotografia');
            $empleados->apellidoPaterno = $request->input('apellidoPaterno');
            $empleados->apellidoMaterno = $request->input('apellidoMaterno');
<<<<<<< HEAD
            $empleados->fechaNacimiento = $request->input('fechaNacimiento');
            $empleados->estadoCivil = $request->input('estadoCivil');
            $empleados->sexo = $request->input('sexo');
            $empleados->curpi = ($request->input('curpi') == '') ? null : $request->input('curpi');
            $empleados->curpf = ($request->input('curpf') == '') ? null : $request->input('curpf');
            $empleados->numeroSeguroSocial = ($request->input('numeroSeguroSocial') == '') ? null : $request->input('numeroSeguroSocial');
            $empleados->umf = ($request->input('umf') == '') ? null : $request->input('umf');
            $empleados->rfc = ($request->input('rfc') == '') ? null : $request->input('rfc');
            $empleados->homoclave = ($request->input('homoclave') == '') ? null : $request->input('homoclave');
            $empleados->tipoContrato = $request->input('tipoContrato');
            $empleados->expediente = $request->input('expediente');
            $empleados->telefono = $request->input('telefono');
            $empleados->codigoPostal = $request->input('codigoPostal');
=======
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
>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
            $empleados->direccion = $request->input('direccion');
            $empleados->poblacion = $request->input('poblacion');
            $empleados->estado = $request->input('estado');
            $empleados->nombrePadre = $request->input('nombrePadre');
            $empleados->nombreMadre = $request->input('nombreMadre');
<<<<<<< HEAD
            $empleados->numeroAfore = ($request->input('numeroAfore') == '') ? null : $request->input('numeroAfore');
            $empleados->numeroFonacot = ($request->input('numeroFonacot') == '') ? null : $request->input('numeroFonacot');
            $empleados->correoElectronico = $request->input('correoElectronico');
            $empleados->clabeInterbancaria = ($request->input('clabeInterbancaria') == '') ? null : $request->input('clabeInterbancaria');
            $empleados->entidadFederativa = $request->input('entidadFederativa');
            $empleados->registro = null;
            $empleados->save();
            return redirect()->route('empleados');
        } else {
            return view('empleados.nuevo');
        }
    }

    /* vamos a actualizar informacion */
    public function update(Request $request, $id = 0,$id2=0) {
        if ($id == 'update') {
            $objeto = Empleado::findOrFail($id2);
            $objeto->codigoEmpleado = ($request->input('codigoEmpleado') == '') ? null : $request->input('codigoEmpleado');
            $objeto->nombre = $request->input('nombre');
            $objeto->fotografia = $request->input('fotografia');
            $objeto->apellidoPaterno = $request->input('apellidoPaterno');
            $objeto->apellidoMaterno = $request->input('apellidoMaterno');
            $objeto->fechaNacimiento = null;
            $objeto->estadoCivil = $request->input('estadoCivil');
            $objeto->sexo = $request->input('sexo');
            $objeto->curpi = ($request->input('curpi') == '') ? null : $request->input('curpi');
            $objeto->curpf = ($request->input('curpf') == '') ? null : $request->input('curpf');
            $objeto->numeroSeguroSocial = ($request->input('numeroSeguroSocial') == '') ? null : $request->input('numeroSeguroSocial');
            $objeto->umf = ($request->input('umf') == '') ? null : $request->input('umf');
            $objeto->rfc = ($request->input('rfc') == '') ? null : $request->input('rfc');
            $objeto->homoclave = ($request->input('homoclave') == '') ? null : $request->input('homoclave');
            $objeto->tipoContrato = $request->input('tipoContrato');
            $objeto->expediente = $request->input('expediente');
            $objeto->telefono = $request->input('telefono');
            $objeto->codigoPostal = $request->input('codigoPostal');
            $objeto->direccion = $request->input('direccion');
            $objeto->poblacion = $request->input('poblacion');
            $objeto->estado = $request->input('estado');
            $objeto->nombrePadre = $request->input('nombrePadre');
            $objeto->nombreMadre = $request->input('nombreMadre');
            $objeto->numeroAfore = ($request->input('numeroAfore') == '') ? null : $request->input('numeroAfore');
            $objeto->numeroFonacot = ($request->input('numeroFonacot') == '') ? null : $request->input('numeroFonacot');
            $objeto->correoElectronico = $request->input('correoElectronico');
            $objeto->clabeInterbancaria = ($request->input('clabeInterbancaria') == '') ? null : $request->input('clabeInterbancaria');
            $objeto->entidadFederativa = $request->input('entidadFederativa');
            $objeto->registro = null;
            $objeto->save();
            return redirect()->route('empleados');
        } else {
            $edit = Empleado::where('idEmpleado', '=', $id)->firstOrFail();
            return view('empleados.actualiza', compact('edit'));
        }
    }

    public function delete(Request $request, $id=0){
       if($id==0){
           $borrar= Empleado::findOrFail($request->idEmpleado);
           $borrar->status="inactivo";
           $borrar->save();
            return redirect()->route('empleados');
        }
    }
=======
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

>>>>>>> 9d8da7cd819abd81830fc9626734f27c59e19da0
}