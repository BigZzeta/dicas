<?php

namespace App\Http\Controllers\usuario;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;
use App\tipousuario;
use App\Http\Requests\UserRequest;

//colocando esta clase
use App\Http\Controllers\Controller;

class UserController extends Controller

{

  // public function __construct()
  // {
  //   $this->middleware('auth');
  // }

  public function index()
  {
    $users = User::all();

    $title = 'Listado de usuarios';

    return view('users.index', compact('title', 'users'));
  }

  public function show($id)
  {
    $title = 'Mostrando usuario';

    $user = User::where('username','=',$id)->firstOrFail();

    return view('users.show', compact('title','user'));

  }

  public function create()
  {
    $title = 'Crear usuario';

    return view('users.create', compact('title'));
  }

  public function store(UserRequest $request)
  {
    $title = 'Guardar Usuario';

    if($request->hasFile('foto')){
        $file = $request->file('foto');
        $name  = time().$file->getClientOriginalName();
        $file->move(public_path().'/img/user/',$name);
    }else{
      $name = '';
    }
    $data = new User();

    $data ->name = $request->input('name');
    $data ->apellidoPaterno = $request->input('apellidoPaterno');
    $data ->apellidoMaterno = $request->input('apellidoMaterno');
    $data ->foto = $name;
    $data ->email = $request->input('email');
    $data ->username = $request->input('username');
    $data ->password = bcrypt($request->input['password']);

    $data -> save();

    $title = 'Listado de usuarios';

    return redirect()->route('users', compact('title'));

    }

  public function editar($username)
  {
    $title = 'Editar usuario';

    $user = User::where('username','=',$username)->firstOrFail();

    return view('users.editar', compact('title','user'));
  }


  public function update(Request $request, $id)
  {
    $data=User::findOrFail($id);

    $valida = $request->validate([
      'name' => 'required',
      'apellidoPaterno' => '',
      'apellidoMaterno' => '',
      'foto' => '',
      'email' => Rule::unique('users')->ignore($data->id,'id'),
      'username' => Rule::unique('users')->ignore($data->id,'id'),
      'tipousuario' => 'required'
    ]);

    if($request->hasFile('foto')){
        $file = $request->file('foto');
        $namefoto  = time().$file->getClientOriginalName();
        $file->move(public_path().'/img/user/',$namefoto);

        $data ->foto = $namefoto;
    }

    if ($data['password'] != null) {
        $data['password'] = bcrypt($data['password']);
    } else {
        unset($data['password']);
    }

    /*Aqui va todo el rollo de la edita en la bd */
    /*Listo, el unico pex que da es el del request, ahi checalo, ya esta solucionado ese rollo*/

    $data ->name = ucwords(strtolower($request->input('name')));
    $data ->apellidoPaterno = ucwords(strtolower($request->input('apellidoPaterno')));
    $data ->apellidoMaterno = ucwords(strtolower($request->input('apellidoMaterno')));
    $data ->email = $request->input('email');
    $data ->username = $request->input('username');
    $data ->status = $request->input('status');
    $data ->idTipoUsuario = $request->input('tipousuario');
    // $data ->password = bcrypt($request->input['password']);

    $data -> save();

    return redirect()->route('users');

    }

}
