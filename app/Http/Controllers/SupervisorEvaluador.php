<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SupervisorEvaluador extends Controller{
    public function index(){
        return view('/supervisor-evaluador/inicio');
    }
    public function aprobarOdi(){
        return view('/supervisor-evaluador/aprobarOdi');
    }
    public function auditoria(){
        return view('/supervisor-evaluador/auditoria');
    }


}
