<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Rango_actuacion extends Controller{

  public function consultar_todo($id){
    $resultado = DB::table("rang_actuacion")
    ->where("estado", "=", 0)
    ->where("tipo", "=", $id)
    ->get();

    echo json_encode($resultado);
  }

  public function guardar(Request $request){
    try {
      DB::table("rang_actuacion")
      ->insert([
        "inicio" => $request->input("modal_input_r_inicio"),
        "final" => $request->input("modal_input_r_final"),
        "descripcion" => $request->input("modal_textarea_descripcion"),
        "estado" => 0,
        "tipo" => $request->input("tipo"),
        "rango_actuacion" => $request->input("modal_textarea_ra")
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

      $this->guardar($request);
      echo 0;

    } catch (\Exception $e) {
      echo 1;
    }




  }
}
