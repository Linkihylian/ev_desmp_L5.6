<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class super_administrador extends Controller{
    public function index(){

        return view('/super_administrador');
    }


    public function conf_ev(){
      return view('/super_administrador/conf_ev/inicio');
    }

    public function guardar_periodo(Request $request){
      echo $request->input('fecha_inicio');

    }

    public function configurar_excepcional(){
      return view('/super_administrador/conf_excep/inicio');
    }

    public function configurar_rango_actuacion(){

      return view('/super_administrador/conf_rango_act/inicio');
    }

    public function evaluaciones_realizadas(){

      return view('/super_administrador/ev_realizadas/inicio');
    }
}
