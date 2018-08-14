<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function test(Request $request)
    echo $request->input('usuario');
    echo $request->input('clave');

}
