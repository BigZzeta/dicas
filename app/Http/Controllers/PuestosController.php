<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puesto;
use Illuminate\Validation\Rule;
use App\Http\Requests\PuestosRequest;

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
      // return "Show";
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

    public function create()
    {
      // return "Crear puesto";
        return view('puestos.create');
    }

    public function store(PuestosRequest $request)
    {
        $puestos = new Puesto();

        $puestos->numeropuesto = $request->numeropuesto;
        $puestos->nombre = strtoupper($request->nombre);
        $puestos->funciones = $request->funciones;
        $puestos->nivelestructural = $request->nivelestructural;
        $puestos->cartatecnica = $request->cartatecnica;
        // $puestos->estatus = $request->estatus;
        $puestos->sueldominimo = $request->sueldominimo;
        $puestos->sueldomaximo = $request->sueldomaximo;

        $puestos->save();

        return redirect()->route('puestos');
    }

    public function editar($id)
    {
      $puestos = Puesto::where('idpuesto','=',$id)->firstOrFail();

      return view('puestos.editar', compact('puestos'));

    }

    public function update(Request $request, $id)
    {
      $puestos=puesto::findOrFail($id);

      $valida = $request->validate([
        'numeropuesto' => Rule::unique('puestos')->ignore($puestos->idpuesto,'idpuesto'),
        'nombre' => Rule::unique('puestos')->ignore($puestos->idpuesto,'idpuesto'),
        'nivelestructural' => 'required',
        'estatus' => 'required',
        'sueldominimo' => 'required',
        'sueldomaximo' => 'required'
      ]);

      $puestos ->numeropuesto = $request->input('numeropuesto');
      $puestos ->nombre = strtoupper($request->input('nombre'));
      $puestos ->funciones = $request->input('funciones');
      $puestos ->nivelestructural = $request->input('nivelestructural');
      $puestos ->cartatecnica = $request->input('cartatecnica');
      $puestos ->estatus = $request->input('estatus');
      $puestos ->sueldominimo = $request->input('sueldominimo');
      $puestos ->sueldomaximo = $request->input('sueldomaximo');
      // return $puestos;

      $puestos -> save();
      // return "Actualziado";

      return redirect()->route('puestos.show', compact('puestos'));

    }

}
