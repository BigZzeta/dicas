<?php

namespace App\Http\Controllers\empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Empleado;
/* vamos a implementar el reaquest */
use App\Http\Requests\EmpleadoRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class EmpleadosController extends Controller {

    public function index() {
        $datos = Empleado::all();
        /* Catalagos */
        $estados = \Illuminate\Support\Facades\DB::table('cat_entidad_federativa')->get();
        return view('empleados.empleados', compact('estados'))->with("empleados", $datos);
    }

    public function add(Request $request, $id = 0) {
        if ($id != 0) {
            $empleados = new Empleado();
            EmpleadosController::refrescar($request, $empleados);
            return redirect()->route('empleados');
        } else {
            $estados = \Illuminate\Support\Facades\DB::table('cat_entidad_federativa')->get();
            return view('empleados.nuevo', ['estados' => $estados]);
        }
    }

    public function update(Request $request, $id = 0, $id2 = 0) {
        if ($id == 'update') {
            $objeto = Empleado::findOrFail($id2);
            /* Validator::make($request, [
              'correoElectronico' => [
              'required',
              Rule::unique('empleados')->ignore($request->$id),
              ],
              ]); */
            EmpleadosController::refrescar($request, $objeto);
            return redirect()->route('empleados');
        } else {
            $edit = Empleado::where('idEmpleado', '=', $id)->firstOrFail();
            /* Catalagos */
            $estados = \Illuminate\Support\Facades\DB::table('cat_entidad_federativa')->get();
            return view('empleados.actualiza', compact('edit', 'estados'));
        }
    }

    public function delete(Request $request, $id = 0) {
        $borrar = ($id < 2) ? Empleado::findOrFail($request->idEmpleado) : '';
        if ($id == 0) {
            $borrar->estado = 'B';
        } else if ($id == 1) {
            $borrar->estado = 'A';
            $borrar->save();
              return redirect()->to('empleados/eliminar/2');
        } else if ($id == 2) {
            $list = Empleado::all()->where('estado', '=', 'B');
            return view('empleados.boveda.boveda', ['empleados' => $list]);
        }
        $borrar->save();
        return redirect()->route('empleados');
    }

    static function refrescar(Request $request, $objeto) {

        $msj = array(
            // 'codigoEmpleado.unique' => 'Valor Repetido',
            'curp.unique' => 'Valor Repetido',
            'numeroSeguroSocial.unique' => 'Valor repetido',
            'umf.unique' => 'Valor repetido',
            'rfc.unique' => 'Valor repetido',
            'numeroAfore.unique' => 'Valor repetido',
            'correoElectronico.unique' => 'Valor repetido',
            'clabeInterbancaria.unique' => 'Valor repetido',
        );

        $valida = $request->validate([
            'curp' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado'),
            'codigoEmpleado' => Rule::unique('empleados')->ignore($objeto->codigoEmpleado, 'codigoEmpleado'),
            ($request->numeroSeguroSocial != '') ? 'numeroSeguroSocial' : '' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado'),
            ($request->umf != '') ? 'umf' : '' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado'),
            'rfc' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado'),
            ($request->numeroAfore != '') ? 'numeroAfore' : '' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado'),
            ($request->numeroFonacot != '') ? 'numeroFonacot' : '' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado'),
            'correoElectronico' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado'),
            'clabeInterbancaria' => Rule::unique('empleados')->ignore($objeto->idEmpleado, 'idEmpleado')
                ], $msj);

        $objeto->codigoEmpleado = ($request->input('codigoEmpleado') == '') ? null : $request->input('codigoEmpleado');
        $objeto->nombre = $request->input('nombre');

        if ($request->hasFile('fotografia')) {
            $file = $request->file('fotografia');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/img/empleados/', $name);
            $objeto->fotografia = $name;
        }
        $objeto->apellidoPaterno = $request->input('apellidoPaterno');
        $objeto->apellidoMaterno = $request->input('apellidoMaterno');
        $objeto->fechaNacimiento = $request->input('fechaNacimiento');
        $objeto->lugarNacimiento = $request->input('lugarNacimiento');
        $objeto->estadoCivil = $request->input('estadoCivil');
        $objeto->sexo = $request->input('sexo');
        $objeto->curp = ($request->input('curp') == '') ? null : $request->input('curp');
        $objeto->numeroSeguroSocial = ($request->input('numeroSeguroSocial') == '') ? null : $request->input('numeroSeguroSocial');
        $objeto->umf = ($request->input('umf') == '') ? null : $request->input('umf');
        $objeto->rfc = ($request->input('rfc') == '') ? null : $request->input('rfc');
        $objeto->tipoContrato = $request->input('tipoContrato');
        $objeto->expediente = $request->input('expediente');
        $objeto->telefono = $request->input('telefono');
        $objeto->codigoPostal = $request->input('codigoPostal');
        $objeto->direccion = $request->input('direccion');
        $objeto->poblacion = $request->input('poblacion');
        $objeto->nombrePadre = $request->input('nombrePadre');
        $objeto->nombreMadre = $request->input('nombreMadre');
        $objeto->numeroAfore = ($request->input('numeroAfore') == '') ? null : $request->input('numeroAfore');
        $objeto->numeroFonacot = ($request->input('numeroFonacot') == '') ? null : $request->input('numeroFonacot');
        $objeto->correoElectronico = $request->input('correoElectronico');
        $objeto->clabeInterbancaria = ($request->input('clabeInterbancaria') == '') ? null : $request->input('clabeInterbancaria');
        $objeto->entidadFederativa = $request->input('entidadFederativa');
        $objeto->registro = null;
        $objeto->save();
    }

}
