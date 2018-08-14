<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function test(Request $request){
        try{
            DB::table("usuario")
            ->where([
                "cedula" => $request->input('usuario'),
                "clave" => $request->input('clave')
            ])
            ->get();
            echo 0;
        }catch (\Exception $e) {
            echo 1;
        }


    }
}
