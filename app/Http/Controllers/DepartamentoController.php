<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Departamento;
use App\Http\Requests\DepartamentoRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();

        // $users = User::all();

        $title = 'Listado de departamentos';

        return view('departamentos.index', compact('title', 'departamentos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoRequest $request)
    {
        $departamento = new Departamento();

        $departamento->numerodepartamento = $request->numerodepartamento;
        $departamento->nombre = strtoupper($request->nombre);
        $departamento->numempleados = $request->numempleados;
        $departamento->numerodepuestos = $request->numerodepuestos;

        $departamento->save();

        return redirect()->route('departamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $departamentos = Departamento::where('id','=',$id)->firstOrFail();

      if ($departamentos->estatus == 1) {
        $departamentos->estatus = "Activo";
      }
      else{
        $departamentos->estatus = "Inactivo";
      }

      return view('departamentos.show', compact('departamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
      $departamento = Departamento::where('id','=',$id)->firstOrFail();

      if ($departamento->estatus == 1) {
        $departamento->estatus = "Activo";
      }
      else{
        $departamento->estatus = "Inactivo";
      }

      return view('departamentos.editar', compact('departamento'));

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
      $departamento=departamento::findOrFail($id);

      $valida = $request->validate([
        'numerodepartamento' => Rule::unique('departamentos')->ignore($departamento->id,'id'),
        'nombre' => Rule::unique('departamentos')->ignore($departamento->id,'id'),
        'numempleados' => 'required'
      ]);

      $departamento->numerodepartamento = $request->input('numerodepartamento');
      $departamento ->nombre = strtoupper($request->input('nombre'));
      $departamento ->numempleados = $request->input('numempleados');

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
