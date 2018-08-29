<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statususuario extends Controller
{
    $status = Status::lists('name','id');    
    return view('users.editar',compact('status'));
}
