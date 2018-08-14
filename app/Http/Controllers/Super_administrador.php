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

    public function reportes(){

      return view('/super_administrador/reportes/inicio');
    }

    public function reportes_dir_of(){

      return view('/super_administrador/reportes/dir_of');
    }

    public function reportes_personal(){

      return view('/super_administrador/reportes/personal');
    }

    public function auditoria_odi(){

      return view('/super_administrador/auditoria/odi');
    }
}
