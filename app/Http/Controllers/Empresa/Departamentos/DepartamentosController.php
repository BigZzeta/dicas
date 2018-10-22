<?php

namespace App\Http\Controllers\Empresa\Departamentos;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Empresa; //no se que pedo con este, me confundi
use App\Une;
use App\Puesto;
use App\Modelos\Departamentos;
use App\Modelos\Empleado;
use Illuminate\Support\Facades\DB;

class DepartamentosController extends Controller {

    function index() {
        $empresas = Une::all();
        $departamentos = DB::table('cat_departamentos')->get();
        $puestos = Puesto::all();
        return view('empresas.asignaDepartamentos.asignaDepartamentos', ['empresas' => $empresas, 'departamentos' => $departamentos, 'puestos' => $puestos]);
    }

    function create(Request $request) {
        
    /*foreach($request->puesto as $item){
        echo "Puesto: ".$item."";
        echo " con num_empleados = ".$request->num_empleados[$item].'<br>';
    }*/
        $depa = new Departamentos();
        $depa->unes_idune = $request->empresa;
        $depa->catDepa_id = $request->departamento;
        $depa->save();
        //Despues de haber insertado el departamento se insertan los puestos ya listos 
        if (count($request->puesto) > 0) {
            $idNewDepa = DB::select("select getIdDepa() as id");
            for ($i = 0; $i < count($request->puesto); $i++) {
                DB::table('departamentos_has_puestos')
                        ->insert(['depa_id' => $idNewDepa[0]->id,
                            'puestos_id' => $request->puesto[$i],
                            'num_empleados'=>$request->num_empleados[$request->puesto[$i]]]);
            }
        }
        return redirect()->route('asignaDepaEmpresa');
    }
    
    /*Vista asigna puesto*/
    public function asignaPuesto(){
        $empleados=Empleado::all();
        $unes= Une::all();
        return view('empresas.asignaPuesto.asignaPuestos',['empleados'=>$empleados,'unes'=>$unes]);
    }
    /*ajax para validar los departamentos que le corresponden a cada empresa*/
    function validaP_depa(Request $request){
        if($request->ajax()){
            return "en construccion";
        }
    }
    
    public function validaDepa(Request $request){
        if($request->post()){
            /*Consulta para validar que no exista dos veces el mismo departamento en cada empresa*/
            $valid=DB::table('departamentos')
                    ->where(['catDepa_id'=>$request->departamento,'unes_idune'=>$request->empresa])
                    ->value('unes_idune');
       if(!$valid){
          $valid="No hay replica";
        }else{
            $valid="Si hay replica";
        }
          return $valid;
        }
    }
    
}
