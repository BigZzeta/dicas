<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller

{
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

  public function store(Request $request)
    {
        //$data = new User();
        $data = request()->validate([
          'name'=>'required'
        ]);

        $data ->name = $request->input('name');
        $data ->apellidoPaterno = $request->input('apellidoPaterno');
        $data ->apellidoMaterno = $request->input('apellidoMaterno');
        $data ->email = $request->input('email');
        $data ->username = $request->input('username');
        $data -> password = bcrypt($request->input['password']);

        $data -> save();

        return redirect()->route('users');

    }

}
