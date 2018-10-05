<?php

namespace App\Http\Controllers\Empresa\Puestos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PuestosEmpresaController extends Controller
{
    function index
    (){
        return view('empresas.asignaPuesto.asignaPuestos') ;
    }
}
