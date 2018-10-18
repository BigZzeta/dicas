<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Validation\Rule;
use Intervention\Image\Image;
use Illuminate\Support\Facades\DB;
use App\Expedientes;
use app\Empleados;
use View;

class ExpedientesController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('auth');
  // }

  public function index()
  {
      // $expedientes = Expedientes::all();
      $expedientes = DB::table('expedientes')
            ->join('catexpedientes', 'catexpedientes.idcatexpediente', '=', 'expedientes.idcatexpediente')
            ->join('empleados', 'empleados.idempleado','=','expedientes.idempleado')
            ->select('expedientes.*','catexpedientes.nombre as nombreDocumento','empleados.nombre as nombreEmpleado','empleados.apellidoPaterno','apellidoMaterno')
            ->get();

      $title = 'Listado de expedientes';

      return view('expedientes.index', compact('title', 'expedientes'));

  }

  public function show($id)
  {

    $title = 'Mostrando expediente';

    $expedientes = DB::table('expedientes')
      ->join('empleados', 'empleados.idempleado', '=', 'expedientes.idempleado')
      ->join('catexpedientes', 'expedientes.idcatexpediente', '=', 'catexpedientes.idcatexpediente')
      ->select('expedientes.*','catexpedientes.nombre as nombredocumento', 'empleados.nombre','empleados.apellidoPaterno','empleados.apellidoMaterno')
      ->where('expedientes.idempleado','=',$id)
      ->get();


    if (Empty($expedientes[0]))
    {
      $title = 'Mostrando expediente';

      $documentos = \Illuminate\Support\Facades\DB::table('catexpedientes')->get();

      return view('expedientes.create', compact('documentos','id'))->with('expedientes', $documentos);

    }
    else {

      $title = 'Mostrando expediente';
      // return $expedientes;

      return view('expedientes.show', compact('title', 'expedientes'));

    }

  }

  public function create()
  {

    return view('expedientes.create');

  }

  public function agregar($id)
  {
    $title = 'Agregar documento';

    $documentos = \Illuminate\Support\Facades\DB::table('catexpedientes')->get();

    return view('expedientes.create', compact('title','documentos','id'))->with('expedientes', $documentos);

  }

  public function store(Request $request)
  {
    if(count($request->idcatexpediente) > 0){
      for($i=0;$i<count($request->idcatexpediente);$i++)
      {
        $expedientes = new Expedientes();

        if($request->hasFile('documento')){
            $file = $request->file('documento');
            $name = time().$file[$i]->getClientOriginalName();
            $file[$i]->move(public_path().'/documentos/expedientes/',$name);
            $expedientes->documento = $name;
        }
        else{
          return "No pasa el documento";
        }
        $expedientes->idempleado = $request->empleado_idempleado[$i];
        $expedientes->idcatexpediente = $request->idcatexpediente[$i];

        if($request->observaciones[$i]){
          $expedientes->observaciones = $request->observaciones[$i];
        }

        $expedientes->save();

      }
    }
    $expedientes->idexpediente = $expedientes->idempleado;

    return redirect()->route('expedientes.show', compact('expedientes'));
  }

  public function editar($id)
  {
    $title = 'Editar expediente';

    $expedientes = DB::table('expedientes')
      ->join('empleados', 'empleados.idempleado', '=', 'expedientes.idempleado')
      ->join('catexpedientes', 'expedientes.idcatexpediente', '=', 'catexpedientes.idcatexpediente')
      ->select('expedientes.*','catexpedientes.nombre as nombredocumento', 'empleados.nombre','empleados.apellidoPaterno','empleados.apellidoMaterno')
      ->where('expedientes.idExpediente','=',$id)
      ->get();
      // return $expedientes;

    return view('expedientes.editar', compact('title', 'expedientes'));

  }

  public function update(Request $request, $id)
  {
    // return $request;
    //busca y elimina el archivo anterior
    $expedientes = DB::table('expedientes')
      ->join('empleados', 'empleados.idempleado', '=', 'expedientes.idempleado')
      ->join('catexpedientes', 'expedientes.idcatexpediente', '=', 'catexpedientes.idcatexpediente')
      ->select('expedientes.*','catexpedientes.nombre as nombredocumento', 'empleados.nombre','empleados.apellidoPaterno','empleados.apellidoMaterno')
      ->where('expedientes.idExpediente','=',$id)
      ->get();

      $documento  = $expedientes[0]->documento;

      $ruta = public_path().'/documentos/expedientes/'.$documento;

      //agrega la nueva ruta y ela rchivo
    $expedientes=Expedientes::findOrFail($id);

    $valida = $request->validate([
      'documento' => Rule::unique('expedientes')->ignore($expedientes->docuemnto,'documento'),
    ]);

    if($request->hasFile('documento')){
        $file = $request->file('documento');
        $name  = time().$file->getClientOriginalName();
        $file->move(public_path().'/documentos/expedientes/',$name);
        $expedientes->documento = $name;

        if(file_exists($ruta)){
          // public_path().'/documentos/expedientes/'.$documento
          \File::delete($ruta);
        }else{
            // dd('El archivo no existe.');
        }
        
    }else{
      // $name = '';
    }

    $expedientes->observaciones = $request->observaciones;

    $expedientes -> save();

    $expedientes->idexpediente=$expedientes->idempleado;

    return redirect()->route('expedientes.show', compact('expedientes'));

  }

  public function delete(Request $request) {
      $expedientes = Expedientes::where('idexpediente','=',$request->idexpediente)->firstOrFail();
      $idempleado = $expedientes->idempleado;

      $documento  = $expedientes->documento;
      $ruta = public_path().'/documentos/expedientes/'.$documento;

      if(file_exists($ruta)){
        // public_path().'/documentos/expedientes/'.$documento
        \File::delete($ruta);
      }else{
          // dd('El archivo no existe.');
      }

      Expedientes::destroy($request->idexpediente);

      return redirect()->route('expedientes.show', compact('idempleado'));
  }

}
