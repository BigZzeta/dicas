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

    //return view('users.index')
    //    ->with('users', User::all())
    //    ->with('title','Listado de usuarios');

      return view('users.index', compact('title', 'users'));
  }

  public function show(User $user)
  {
    //$users = DB::table('users')->get();
    //$user = User::findOrFail($id);

    //dd($user);

    /*
    if ($user == null){
      return view('errors.404');
    }
    */

    return view('users.show', compact('user'));

  }

  public function create()
  {
      return view('users.create');
  }

  public function store(UserRequest $request)
  {
    $data = new User();

    $data ->name = $request->input('name');
    $data ->apellidoPaterno = $request->input('apellidoPaterno');
    $data ->apellidoMaterno = $request->input('apellidoMaterno');
    $data ->email = $request->input('email');
    $data ->username = $request->input('username');
    $data ->password = bcrypt($request->input['password']);

    $data -> save();

    return redirect()->route('users');

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
    return "Usuario actualizado" . $id;

    }



}
