<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluadorController extends Controller{
  public function index(){
    return view("evaluador.inicio");
  }
}
