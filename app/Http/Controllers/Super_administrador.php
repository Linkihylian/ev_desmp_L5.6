<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class super_administrador extends Controller{
    public function index(){
        return view('/super_administrador/inicio');
    }

    public function guardar_periodo(Request $request){
      echo $request->input('fecha_inicio');

    }
}
