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

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $users = User::all();

    $title = 'Listado de usuarios';

    return view('users.index', compact('title', 'users'));
  }

  public function show($id)
  {
    $user = User::where('username','=',$id)->firstOrFail();
    return view('users.show', compact('user'));

  }

  public function create()
  {
    return view('users.create');
  }

  public function store(UserRequest $request)
  {
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
    // $data ->tipousuario = $request->input('tipousuario');
    $data ->password = bcrypt($request->input['password']);

    $data -> save();

    return redirect()->route('users');

    }

  public function editar($username)
  {
    // $tipou = tipousuario::all();

    $user = User::where('username','=',$username)->firstOrFail();

    return view('users.editar', compact('user'));
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
      'status' => 'required',
      'tipousuario' => 'required'
    ]);

    if($request->hasFile('foto')){
        $file = $request->file('foto');
        $namefoto  = time().$file->getClientOriginalName();
        $file->move(public_path().'/img/user/',$namefoto);

        $data ->foto = $namefoto;
    }

    if ($request['password'] != null) {
        $data->password = bcrypt($request['password']);
    } else {

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

    $data -> save();

    return redirect()->route('users');

    }

}
