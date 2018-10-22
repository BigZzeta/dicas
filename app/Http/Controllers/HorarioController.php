<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use Illuminate\Validation\Rule;

class HorarioController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('auth');
  // }

  public function index()
  {
      $horarios = Horario::all();

      $title = 'Listado de horarios';

      return view('horarios.index', compact('title', 'horarios'));

  }

  public function show($id)
  {
    $title = 'Mostrando horario';

    $horarios = Horario::where('idhorario','=',$id)->firstOrFail();

    return view('horarios.show', compact('title', 'horarios'));
  }

  public function create()
  {
      return view('horarios.create');
  }

  public function store(Request $request)
  {
      $horarios = new Horario();

      $msj = array(
          'codigoEmpleado.unique' => 'Valor Repetido',
          'nombre.unique' => 'Valor Repetido',
          'descripcion.unique' => 'Valor repetido',
          'umf.unique' => 'Valor repetido',
          'rfc.unique' => 'Valor repetido',
          'numeroAfore.unique' => 'Valor repetido',
          'correoElectronico.unique' => 'Valor repetido',
          'clabeInterbancaria.unique' => 'Valor repetido',
      );

      $valida = $request->validate([
        'nombre' => Rule::unique('horarios')->ignore($horarios->idhorario,'idhorario'),
        'descripcion' => Rule::unique('horarios')->ignore($horarios->idhorario,'idhorario'),
      ], $msj);

      $horarios->nombre = strtoupper($request->nombre);
      $horarios->descripcion = strtoupper($request->descripcion);

      $horarios->save();

      return redirect()->route('horarios');
  }

  public function editar($id)
  {

    $title = 'Editar horario';

    $horarios = Horario::where('idhorario','=',$id)->firstOrFail();

    return view('horarios.editar', compact('title', 'horarios'));

  }

  public function update(Request $request, $id)
  {
    $horarios=Horario::findOrFail($id);

    $valida = $request->validate([
      'nombre' => Rule::unique('horarios')->ignore($horarios->nombre,'nombre'),
      'descripcion' => Rule::unique('horarios')->ignore($horarios->descripcion,'descripcion'),
    ]);

    $horarios ->nombre = strtoupper($request->input('nombre'));
    $horarios ->descripcion = strtoupper($request->input('descripcion'));

    $horarios -> save();

    return redirect()->route('horarios.show', compact('horarios'));

  }

}
