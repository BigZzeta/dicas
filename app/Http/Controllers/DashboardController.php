<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('auth');
  // }

  public function index()
  {
      // $horarios = Horario::all();
      //
      $title = 'Dashboard';

      return view('contenido.dashboard', compact('title'));

  }
}
