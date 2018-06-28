<?php

namespace App\Http\Controllers\usuario;

//use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;
use App\Http\Requests\UserRequest;

//colocando esta clase
use App\Http\Controllers\Controller;


class UserController extends Controller

{

  public function __construct()
  {
    //$this->middleware('auth');
  }

  public function index()
  {

    //$users = DB::table('users')->get();
    $users = User::all();

    //dd($users);

    $title = 'Listado de usuarios';

    return view('users.index', compact('title', 'users'));
  }

  public function show($username)
  {
    $user = User::where('username','=',$username)->firstOrFail();

    return view('users.show', compact('user'));

  }

  public function create()
  {
      return view('users.create');
  }

  public function store(UserRequest $request)
  {
    //return $request;
    if($request->hasFile('foto')){
        $file = $request->file('foto');
        $name  = time().$file->getClientOriginalName();
        $file->move(public_path().'/img/user/',$name);
        //return $name;
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

    return redirect()->route('users');

    }

  public function editar()
  {
    return view('users.editar');
  }

  public function update(UserRequest $request, $id)
  {
    /*
    $data = new User();

    $data ->name = $request->input('name');
    $data ->apellidoPaterno = $request->input('apellidoPaterno');
    $data ->apellidoMaterno = $request->input('apellidoMaterno');
    $data ->email = $request->input('email');
    $data ->username = $request->input('username');
    $data ->password = bcrypt($request->input['password']);

    $data -> save();

    return redirect()->route('users');
    */
    // return "Usuario actualizado" . $id;
    return "Actualizado";

    }



}
