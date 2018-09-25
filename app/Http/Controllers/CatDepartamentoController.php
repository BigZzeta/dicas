<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\CatDepartamento;
use App\Http\Requests\DepartamentoRequest;

class CatDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = CatDepartamento::all();

        $title = 'Listado de departamentos';

        return view('cat_departamentos.index', compact('title', 'departamentos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear departamento';

        return view('cat_departamentos.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoRequest $request)
    {
        $title = 'Guardando departamento';

        $departamento = new CatDepartamento();

        $departamento->numerodepartamento = $request->numerodepartamento;
        $departamento->nombre = strtoupper($request->nombre);
        // $departamento->numempleados = $request->numempleados;
        // $departamento->numerodepuestos = $request->numerodepuestos;

        $departamento->save();

        return redirect()->route('departamentos', compact('title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $title = 'Mostrando departamento';

      $departamentos = CatDepartamento::where('idcatdepartamento','=',$id)->firstOrFail();

      if ($departamentos->estatus == 1) {
        $departamentos->estatus = "Activo";
      }
      else{
        $departamentos->estatus = "Inactivo";
      }

      return view('cat_departamentos.show', compact('title','departamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
      $title = 'Editar departamento';

      $departamento = CatDepartamento::where('idcatdepartamento','=',$id)->firstOrFail();

      if ($departamento->estatus == 1) {
        $departamento->estatus = "Activo";
      }
      else{
        $departamento->estatus = "Inactivo";
      }

      return view('cat_departamentos.editar', compact('title', 'departamento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $departamento=Catdepartamento::findOrFail($id);

      $valida = $request->validate([
        'numerodepartamento' => Rule::unique('cat_departamentos')->ignore($departamento->idcatdepartamento,'idcatdepartamento'),
        'nombre' => Rule::unique('cat_departamentos')->ignore($departamento->idcatdepartamento,'idcatdepartamento'),
        // 'numempleados' => 'required'
      ]);

      if ($request->estatus==='Activo'){
        $request->estatus = '1';
      }
      else{
        $request->estatus=='0';
      }

      $departamento->numerodepartamento = $request->input('numerodepartamento');
      $departamento ->nombre = strtoupper($request->input('nombre'));
      $departamento ->estatus = $request->estatus;

      $departamento -> save();

      return redirect()->route('departamentos.show', compact('departamento'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function desactivar(Request $request)
    {
        $departamento = Departamento::findOrfail($request->id);
        $departamento->condicion = '0';
        $departamento->save();
    }
    public function activar(Request $request)
    {
        $departamento = Departamento::findOrfail($request->id);
        $departamento->condicion = '1';
        $departamento->save();
    }
}
