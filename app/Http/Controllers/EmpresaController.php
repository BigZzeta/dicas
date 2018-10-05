<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Empresa;

class EmpresaController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
  
  public function index()
  {
      $empresas = Empresa::all();

      // $users = User::all();

      $title = 'Listado de Empresas';

      return view('empresas.index', compact('title','empresas'));

  }

  public function show($id)
  {
    $title = 'Listado de Empresas';

    return "Show";
    $puestos = Puesto::where('idpuesto','=',$id)->firstOrFail();
    // return $puestos;
    if ($puestos->estatus == 1) {
      $puestos->estatus = "Activo";
    }
    else{
      $puestos->estatus = "Inactivo";
    }

    return view('puestos.show', compact('puestos'));
  }

  public function editar($id)
  {
    $title = 'Editar Empresa';

    $empresas = Empresa::where('idempresa','=',$id)->firstOrFail();

    return view('empresas.editar', compact('title', 'empresas'));

  }

  public function update(Request $request, $id)
  {
    $empresas=empresa::findOrFail($id);
    // return $empresas;

    $valida = $request->validate([
      'nombre' => 'required', 'nombre', 'max:255', 'unique:empresas',
      'direccion' => 'required',
      'colonia' => 'required',
      'codigopostal' => 'required',
      'telefono1' => '',
      'telefono2' => '',
      'siglas' => 'required'
    ]);

    $empresas ->nombre = strtoupper($request->input('nombre'));
    $empresas ->direccion = strtoupper($request->input('direccion'));
    $empresas ->colonia = strtoupper($request->input('colonia'));
    $empresas ->codigopostal= $request->input('codigopostal');
    $empresas ->telefono1 = $request->input('telefono1');
    $empresas ->telefono2 = $request->input('telefono2');
    $empresas ->siglas = strtoupper($request->input('siglas'));

    $empresas -> save();

    return redirect()->route('empresas', compact('empresas'));

  }

}
