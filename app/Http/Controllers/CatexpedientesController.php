<?php

namespace App\Http\Controllers;

use App\Catexpedientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CatexpedientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $catexpedientes = CatExpedientes::all();

      $title = 'Documentos del expedientes';

      return view('catexpedientes.index', compact('title', 'catexpedientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title = 'Crear nuevo documento para el expediente';

      return view('catexpedientes.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $catexpediente = new CatExpedientes();

      $msj = array(
          'numero.unique' => 'Valor Repetido',
          'nombre.unique' => 'Valor Repetido',
      );

      $valida = $request->validate([
        'numero' => 'required|unique:catexpedientes,numero',
        'nombre' => 'required|unique:catexpedientes,nombre',
      ], $msj);

      $catexpediente->numero = $request->numero;
      $catexpediente->nombre = $request->nombre;

      $catexpediente->save();

      return redirect()->route('catexpedientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catexpedientes  $catexpedientes
     * @return \Illuminate\Http\Response
     */
    public function show(Catexpedientes $catexpedientes, $id)
    {
      $title = 'Mostrando expediente';

      $expedientes = DB::table('catexpedientes')
        //->join('Empleados', 'idempleado', '=', 'expedientes.empleados_idempleado')
        ->select('catexpedientes.*')
        ->where('idcatexpediente','=',$id)
        ->get();

      if (Empty($expedientes[0]))
      {
        return view('expedientes.create', compact('title', 'id'));
      }
      else {
        return view('catexpedientes.show', compact('title', 'expedientes'));
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catexpedientes  $catexpedientes
     * @return \Illuminate\Http\Response
     */
    public function editar(Catexpedientes $catexpedientes,$id)
    {
      $title = 'Editar documento';

      $catexpedientes = CatExpedientes::where('idcatexpediente','=',$id)->firstOrFail();

      return view('catexpedientes.editar', compact('title', 'catexpedientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catexpedientes  $catexpedientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $catexpediente=CatExpedientes::findOrFail($id);

      $msj = array(
          'numero.unique' => 'Valor Repetido',
          'nombre.unique' => 'Valor Repetido',
      );

      $valida = $request->validate([
        'numero' => Rule::unique('catexpedientes')->ignore($catexpediente->idcatexpediente,'idcatexpediente'),
        'nombre' => Rule::unique('catexpedientes')->ignore($catexpediente->idcatexpediente,'idcatexpediente'),
      ], $msj);

      $catexpediente->numero = $request->input('numero');
      $catexpediente->nombre = $request->input('nombre');
      $catexpediente->estatus = $request->input('estatus');

      $catexpediente -> save();

      return redirect()->route('catexpedientes', compact('catexpedientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catexpedientes  $catexpedientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catexpedientes $catexpedientes)
    {
        //
    }
}
