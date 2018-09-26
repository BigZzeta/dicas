<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

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

        // return $departamentos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nombre = $request->nombre;
        $departamento->descripcion = $request->descripcion;
        $departamento->condicion = '1';
        $departamento->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $departamentos = Departamento::where('iddepartamento','=',$id)->firstOrFail();

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
      $departamento = Departamento::where('iddepartamento','=',$id)->firstOrFail();
      // return ($departamentos);
      if ($departamento->estatus == 1) {
        $departamento->estatus = "Activo";
      }
      else{
        $departamento->estatus = "Inactivo";
      }

      return view('departamentos.editar', compact('departamento'));
      // return view('departamentos.editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=0)
    {
        // $departamentos = Departamento::findOrfail($request->id);
        // return($departamentos);
        return("Hola".$id);
        //
        // $departamento->nombre = $request->nombre;
        // $departamento->descripcion = $request->descripcion;
        // $departamento->condicion = '1';
        // $departamento->save();
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
