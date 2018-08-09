<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluadorController extends Controller{
  public function index(){
    return view("evaluador.inicio");
  }
  public function odi(){
    return view("evaluador.odi.inicio");
  }
  public function auditoria(){
    return view("evaluador.odi.auditoria.historial");
  }
  public function rechazadas(){
    return view("evaluador.odi.rechazadas");
  }
}
