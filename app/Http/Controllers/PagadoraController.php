<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagadora;
use App\Http\Requests\PagadoraRequest;
use Illuminate\Validation\Rule;

class PagadoraController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
  
  public function index()
  {
      $pagadoras = Pagadora::all();

      // return $pagadora;

      $title = 'Listado de las Pagadoras';

      return view('pagadoras.index', compact('title','pagadoras'));

  }

  public function show($id)
  {
    $title = 'Listado de Empresas';

    $pagadoras = Pagadora::where('idpagadora','=',$id)->firstOrFail();

    return view('pagadoras.show', compact('pagadoras', 'title'));
  }

  public function create()
  {
      return view('pagadoras.create');
  }

  public function store(PagadoraRequest $request)
  {
      $pagadoras = new Pagadora();

      $pagadoras->nombre = strtoupper($request->nombre);
      $pagadoras->direccion = strtoupper($request->direccion);

      $pagadoras->save();

      return redirect()->route('pagadora');
  }


  public function editar($id)
  {
    $title = 'Editar Pagadora';

    $pagadoras = Pagadora::where('idpagadora','=',$id)->firstOrFail();

    return view('pagadoras.editar', compact('title', 'pagadoras'));

  }

  public function update(Request $request, $id)
  {
    $pagadoras=Pagadora::findOrFail($id);

    $valida = $request->validate([
        'nombre' => Rule::unique('pagadoras')->ignore($pagadoras->idpagadora,'idpagadora'),
        'direccion' => 'required',
    ]);

    $pagadoras ->nombre = strtoupper($request->input('nombre'));
    $pagadoras ->direccion = strtoupper($request->input('direccion'));

    $pagadoras -> save();

    return redirect()->route('pagadora', compact('pagadoras'));

  }
}
