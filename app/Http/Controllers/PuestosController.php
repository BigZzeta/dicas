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

        $title = 'Listado de puestos';

        return view('puestos.index', compact('title', 'puestos'));

    }

    public function show($id)
    {
      $title = 'Mostrando puesto';

      $puestos = Puesto::where('idpuesto','=',$id)->firstOrFail();

      if ($puestos->estatus == 1) {
        $puestos->estatus = "Activo";
      }
      else{
        $puestos->estatus = "Inactivo";
      }

      return view('puestos.show', compact('title', 'puestos'));
    }

    public function create()
    {
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
        $puestos->sueldominimo = $request->sueldominimo;
        $puestos->sueldomaximo = $request->sueldomaximo;

        $puestos->save();

        return redirect()->route('puestos');
    }

    public function editar($id)
    {

      $title = 'Editar puesto';

      $puestos = Puesto::where('idpuesto','=',$id)->firstOrFail();

      return view('puestos.editar', compact('title', 'puestos'));

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

      $puestos -> save();

      return redirect()->route('puestos.show', compact('puestos'));

    }

}
