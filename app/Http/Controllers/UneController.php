<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Une;
use App\Http\Requests\UneRequest;
class UneController extends Controller
{
  public function index()
  {
      $unes = Une::all();

      $title = 'Listado de UNEs';

      return view('une.index', compact('title', 'unes'));

  }

  public function show($id)
  {
    $title = 'Mostrando UNE';

    $unes = Une::where('idune','=',$id)->firstOrFail();

    if ($unes->estatus == 1) {
      $unes->estatus = "Activo";
    }
    else{
      $unes->estatus = "Inactivo";
    }

    return view('une.show', compact('title', 'unes'));
  }

  public function create()
  {
      return view('une.create');
  }

  public function store(UneRequest $request)
  {
      $unes = new Une();

      // $valida = $request->validate([
      //   'numeroune' => Rule::unique('unes')->ignore($unes->idune,'idune'),
      //   'nombre' => Rule::unique('unes')->ignore($unes->idune,'idune'),
      //   'direccion' => 'required',
      //   'inventariopuestos' => 'required'
      // ]);

      $unes->numeroune = $request->numeroune;
      $unes->nombre = strtoupper($request->nombre);
      $unes->direccion = strtoupper($request->direccion);
      $unes->inventariopuestos = $request->inventariopuestos;

      $unes->save();

      return redirect()->route('unes');
  }

  public function editar($id)
  {

    $title = 'Editar UNE';

    $unes = Une::where('idune','=',$id)->firstOrFail();

    if ($unes->estatus == 1) {
      $unes->estatus = "Activo";
    }
    else{
      $unes->estatus = "Inactivo";
    }

    return view('une.editar', compact('title', 'unes'));

  }

  public function update(Request $request, $id)
  {
    $unes=Une::findOrFail($id);

    $valida = $request->validate([
      'numeroune' => Rule::unique('unes')->ignore($unes->idune,'idune'),
      'nombre' => Rule::unique('unes')->ignore($unes->idune,'idune'),
    ]);

    if ($request->estatus==='Activo'){
      $request->estatus = '1';
    }
    else{
      $request->estatus=='0';
    }

    $unes ->numeroune = $request->input('numeroune');
    $unes ->nombre = strtoupper($request->input('nombre'));
    $unes ->direccion = strtoupper($request->input('direccion'));
    $unes ->inventariopuestos = $request->input('inventariopuestos');
    $unes ->estatus = $request->estatus;

    $unes -> save();

    return redirect()->route('unes');

  }
}
