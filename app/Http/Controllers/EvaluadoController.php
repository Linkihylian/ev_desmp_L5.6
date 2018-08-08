<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EvaluadoController extends Controller{
    public function index(){
        return view('/evaluado/inicio');
    }
    public function historial(){
        return view('/evaluado/historial');
    }
    public function reporte(){
        return view('/evaluado/reporte');
    }


}
