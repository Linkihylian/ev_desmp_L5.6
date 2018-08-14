<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Excepcional extends Controller{

  public function consultar_todo(){

    try {
      $resultado = DB::table("exp_asig_excepcional")
      ->where("estado", "=", 0)
      ->get();

      echo json_encode($resultado);

    } catch (\Exception $e) {
      echo 1;
    }

  }

  public function guardar(Request $request){
    try {
      DB::table("exp_asig_excepcional")
      ->insert([
        "exposicion"  => $request->input("modal_input_excepcional"),
        "estado"      => 0
      ]);
      echo 0;
    } catch (\Exception $e) {
      echo 1;
    }
  }


  public function modificar(Request $request){
    try {
      DB::table("rang_actuacion")
      ->where("id_rang_actuacion", "=", $request->input("modal_input_id_ra"))
      ->update(["estado" => 1]);

      if ($request->input("estado") == 0) {
        $this->guardar($request);
      }
      echo 0;

    } catch (\Exception $e) {
      echo 1;
    }




  }
}
