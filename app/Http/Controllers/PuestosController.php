<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puesto;
use Illuminate\Validation\Rule;
use App\Http\Requests\PuestosRequest;

class PuestosController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

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

      if($request->hasFile('cartatecnica')){
          $file = $request->file('cartatecnica');
          $name  = time().$file->getClientOriginalName();
          $file->move(public_path().'/cartatecnica/doc/',$name);
          $puestos->cartatecnica = $name;
      }else{
        // $name = '';
      }


      $puestos->numeropuesto = $request->numeropuesto;
      $puestos->nombre = strtoupper($request->nombre);
      $puestos->funciones = $request->funciones;
      $puestos->nivelestructural = $request->nivelestructural;
      // $puestos->cartatecnica = $name;
      $puestos->sueldominimo = $request->sueldominimo;
      $puestos->sueldomaximo = $request->sueldomaximo;

      $puestos->save();

      return redirect()->route('puestos');
    }

    public function editar($id)
    {

      $title = 'Editar puesto';

      $puestos = Puesto::where('idpuesto','=',$id)->firstOrFail();

      if($puestos->estatus==1){
        $puestos->estatus='Activo';
      }else{
        $puestos->estatus='Inactivo';
      }

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

      if($request->hasFile('cartatecnica')){
          $file = $request->file('cartatecnica');
          $name  = time().$file->getClientOriginalName();
          $file->move(public_path().'/cartatecnica/doc/',$name);
          $puestos->cartatecnica = $name;
      }else{
        // $name = '';
      }

      if ($request->estatus==='Activo'){
        $request->estatus = '1';
      }
      else{
        $request->estatus=='0';
      }
      // return $request;

      $puestos ->numeropuesto = $request->input('numeropuesto');
      $puestos ->nombre = strtoupper($request->input('nombre'));
      $puestos ->funciones = $request->input('funciones');
      $puestos ->nivelestructural = $request->input('nivelestructural');
      // $puestos ->cartatecnica = $request->input('cartatecnica');
      $puestos ->estatus = $request->estatus;
      $puestos ->sueldominimo = $request->input('sueldominimo');
      $puestos ->sueldomaximo = $request->input('sueldomaximo');

      $puestos -> save();

      return redirect()->route('puestos.show', compact('puestos'));

    }

}
