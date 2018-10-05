<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Incidencias;

class IncidenciasController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
      $incidencias = Incidencias::all();

      $title = 'Listado de incidencias';

      return view('incidencias.index', compact('title', 'incidencias'));

  }

  public function show($id)
  {
    $title = 'Mostrando incidencia';

    $incidencias = Incidencias::where('idincidencia','=',$id)->firstOrFail();

    return view('incidencias.show', compact('title', 'incidencias'));
  }

  public function create()
  {
      return view('incidencias.create');
  }

  public function store(Request $request)
  {
    $incidencias = new Incidencias();

    // if($request->hasFile('cartatecnica')){
    //     $file = $request->file('cartatecnica');
    //     $name  = time().$file->getClientOriginalName();
    //     $file->move(public_path().'/cartatecnica/doc/',$name);
    //     $puestos->cartatecnica = $name;
    // }else{
    //   // $name = '';
    // }

    $incidencias->nombre = strtoupper($request->nombre);

    $incidencias->save();

    return redirect()->route('incidencias');
  }

  public function editar($id)
  {

    $title = 'Editar incidencias';

    $incidencias = Incidencias::where('idincidencia','=',$id)->firstOrFail();

    return view('incidencias.editar', compact('title', 'incidencias'));

  }

  public function update(Request $request, $id)
  {
    $incidencias=Incidencias::findOrFail($id);

    $valida = $request->validate([
      'nombre' => Rule::unique('incidencias')->ignore($incidencias->idincidencia,'idincidencia'),
    ]);

    $incidencias ->nombre = strtoupper($request->input('nombre'));

    $incidencias -> save();

    return redirect()->route('incidencias', compact('incidencias'));

  }
}
