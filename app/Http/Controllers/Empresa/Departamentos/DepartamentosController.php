<?php
namespace App\Http\Controllers\Empresa\Departamentos;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Empresa;
use App\Puesto;
use Illuminate\Support\Facades\DB;
class DepartamentosController extends Controller
{
    function index(){
        $empresas= Empresa::all();
        $departamentos=DB::table('cat_departamentos')->get();
        return view('empresas.asignaDepartamentos.asignaDepartamentos',
                ['empresas'=>$empresas,'departamentos'=>$departamentos]);
    }
}
