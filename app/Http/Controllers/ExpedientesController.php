<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expedientes;
use app\Empleados;

class ExpedientesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
      $expedientes = Expedientes::all();

      $title = 'Listado de expedientes';

      return view('expedientes.index', compact('title', 'expedientes'));

  }

  public function show($id)
  {
    $title = 'Mostrando expediente';

    $expedientes=Expedientes::select('*')
             ->where('empleados_idempleado','=',$id)
             ->first();
    if (Empty($expedientes))
    {
      return view('expedientes.create', compact('title', 'id'));
    }
    else {
      return view('expedientes.show', compact('title', 'expedientes'));
    }

  }

  public function create()
  {
      return view('expedientes.create');
  }

  public function store(Request $request)
  {
    $expedientes = new Expedientes();

    if($request->hasFile('cartatecnica')){
        $file = $request->file('cartatecnica');
        $name  = time().$file->getClientOriginalName();
        $file->move(public_path().'/cartatecnica/doc/',$name);
        $puestos->cartatecnica = $name;
    }else{
      // $name = '';
    }


    $expedientes->empleados_idempleado = $request->empleado_idempleado;
    // $expedientes->nombre = strtoupper($request->nombre);
    // $expedientes->funciones = $request->funciones;
    // $expedientes->nivelestructural = $request->nivelestructural;
    // $expedientes->sueldominimo = $request->sueldominimo;
    // $expedientes->sueldomaximo = $request->sueldomaximo;

    $expedientes->save();

    return redirect()->route('expedientes');
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
