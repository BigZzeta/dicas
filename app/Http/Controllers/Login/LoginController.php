<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function valida(Request $request){
      //  return "pass: ".$request->pass." usuario : ".$request->usr;
        if($request->usr=="admin" & $request->pass=='admin'){
         return response()->json(['Login'=> route('inicio')]);
        }
        else{
            echo "error";
        }
    }
}
