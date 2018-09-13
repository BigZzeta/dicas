<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puesto;

class PuestosController extends Controller
{
    public function index()
    {
        $puestos = Puesto::all();

        // $users = User::all();

        $title = 'Listado de puestos';

        return view('puestos.index', compact('title', 'puestos'));

    }

    public function show($id)
    {
        return "Show";
    /*  $departamentos = Departamento::where('id','=',$id)->firstOrFail();

      if ($departamentos->estatus == 1) {
        $departamentos->estatus = "Activo";
      }
      else{
        $departamentos->estatus = "Inactivo";
      }

      return view('departamentos.show', compact('departamentos'));*/
    }

}
