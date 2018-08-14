<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Login;
use Auth;
use URL;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller{

  public function index(){
    return view('login.inicio');
  }



  public function login(Request $request){
    $resultado = null;
    $estado = null;
    try{
          $resultado = DB::table("usuario")
          ->where([
              "cedula" => $request->input('usuario'),
              "clave" => $request->input('clave'),
              "estado" => 0
          ])
          ->get();
          $estado = 0;
        }
    catch (\Exception $e){
          $estado = 1;
        }
    if (!$resultado->isEmpty()) {
        $request->session()->put('cedula', $resultado[0]->cedula);
        $auth = $request->session()->get('cedula');
        }
    else{
        echo "no existe";
        }

  }

}
