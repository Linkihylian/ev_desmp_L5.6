@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Gestionar ODI')
@section("css")
<link rel="stylesheet" href="{{ asset("css/jquery-ui.css") }}">
<link rel="stylesheet" href="{{ asset("css/datepicker_personal.css") }}">

<link rel="stylesheet" href="{{ asset("css/selectize.bootstrap3.css") }}">
@endsection


@section('contenido')

<div class="card">
  <div class="card-body">


<!--inicio de cartas-->
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-periodo-tab" data-toggle="pill" href="#pills-periodo" role="tab" aria-controls="pills-periodo" aria-selected="true">1. Datos del Evaluador Asignado <i class="fas fa-angle-right"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-odi-tab" data-toggle="pill" href="#pills-odi" role="tab" aria-controls="pills-odi" aria-selected="false">2. Datos del Evaluado  <i class="fas fa-angle-right"></i></a>
          <!--<a class="nav-link disabled" id="pills-odi-tab" data-toggle="pill" href="#pills-odi" role="tab" aria-controls="pills-odi" aria-selected="false">2. Objetivos de desempeño individual <i class="fas fa-angle-right"></i></a>-->
        </li>
        <li class="nav-item">
          <a class="nav-link " id="pills-objetivos-tab" data-toggle="pill" href="#pills-objetivos" role="tab" aria-controls="pills-categeorias" aria-selected="false">3. Evaluacion de Objetivos Individual </a>
        </li>
    </ul>

      <!--fin de cartas-->

      <br>
      <div class="tab-content" id="pills-tabContent">
        <!--inicio primera cartas-->
      <div class="tab-pane fade show active" id="pills-periodo" role="tabpanel" aria-labelledby="pills-periodo-tab">
        <h5 class="card-title text-center">  Datos del Evaluador</h5>
        <div class="col-sm-12 pt-2 table-responsive">
        <div class="card" style="border: 1px solid rgb(255, 255, 255);">

          <table class="table table-hover">
            <thead class="bg-secondary text-white ">
              <tr>
                <th >Nombre y Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Coordinacion</th>
                <th scope="col">Direccion Adscrita</th>
                <th scope="col">Cargo</th>
                <th scope="col">Fecha Ingreso</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>

      <!--fin primera cartas-->

      <!--inicio segunda cartas-->
    <div class="tab-pane fade" id="pills-odi" role="tabpanel" aria-labelledby="pills-odi-tab">
        <h5 class="card-title text-center">  Datos del Evaluado</h5>
          <div class="col-sm-12 pt-2 table-responsive">
            <div class="card" style="border: 1px solid rgb(255, 255, 255);">
              <table class="table table-hover ">
                <thead class="bg-secondary text-white ">
              <tr>
                <th scope="col">Nombre y Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Coordinacion</th>
                <th scope="col">Direccion Adscrita</th>
                <th scope="col">Cargo</th>
                <th scope="col">Fecha Ingreso</th>
              </tr>
            </thead>
              <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <!--fin segunda carta-->


    <!--inicio tercera carta-->
    <div class="tab-pane fade" id="pills-objetivos" role="tabpanel" aria-labelledby="pills-objetivos-tab">
      <h5 class="card-title text-center">Evaluacion de Objetivos de Desempeño Individual</h5>
        <div class="col-sm-12 pt-5 table-responsive">
          <div class="card" style="border: 1px solid rgb(255, 255, 255);">
            <table class="table table-hover" >

              <thead class="bg-secondary text-white ">
                <tr>
                  <th rowspan="2" class="text-center"style="vertical-aling:inherit; border-bottom: 2px solid #6c747d;">Objetivo de Desempeño Individual</th>
                  <th rowspan="2" style="vertical-aling:inherit; border-bottom: 2px solid #6c747d;">Peso</th>
                  <th colspan="5" class="text-center" style="width: 20%; border-bottom: 2px solid #6c747d;">Rango</th>
                  <th rowspan="2" class="text-center" style="vertical-aling:inherit; border-bottom: 2px solid #6c747d;">Peso por Rangos</th>
                </tr>
                <tr>
                  <td class="text-center">1</td>
                  <td class="text-center">2</td>
                  <td class="text-center">3</td>
                  <td class="text-center">4</td>
                  <td class="text-center">5</td>
                </tr>
              </thead>
              <tbody>
              <tr scope="row">
                <td >2</td>
                <td  class="text-center">2</td>
                <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
                <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
                <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
                <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
                <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
                <td  class="text-center">2</td>
              </tr>


            </tbody>
            <tfoot>
              <tr>
                <th class="text-left" >Total</th>
                <th class="text-center" >2</th>
                <th class="text-right" colspan="6" >22</th>
              </tr>
            </tfoot>
          </table>
          </div>
        </div>
        <br>
        <br>



    <!--inicio seccion obreros -->
    <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Objetivos de Desempeño Individual Obreros
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

        <table class="table table-hover ">

          <thead class="bg-secondary text-white ">
            <tr>
              <th rowspan="2" class="text-center"style="vertical-aling:inherit; border-bottom: 2px solid #6c747d;">Objetivo de Desempeño Individual</th>
              <th rowspan="2" style="vertical-aling:inherit; border-bottom: 2px solid #6c747d;">Peso</th>
              <th colspan="5" class="text-center" style="width: 20%; border-bottom: 2px solid #6c747d;">Rango</th>
              <th rowspan="2" class="text-center" style="vertical-aling:inherit; border-bottom: 2px solid #6c747d;">Peso por Rangos</th>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td class="text-center">2</td>
              <td class="text-center">3</td>
              <td class="text-center">4</td>
              <td class="text-center">5</td>
            </tr>
          </thead>
          <tbody>
          <tr scope="row">
            <td >2</td>
            <td  class="text-center">2</td>
            <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
            <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
            <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
            <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
            <td><input class="form-check-input" type="radio" style="margin-left:3px; border-bottom: 2px solid #6c747d;" name="exampleRadios" id="exampleRadios1" value="option1" checked></td>
            <td  class="text-center">2</td>
          </tr>


        </tbody>
        <tfoot>
          <tr>
            <th class="text-left" >Total</th>
            <th class="text-center" >2</th>
            <th class="text-right" colspan="6" >22</th>
          </tr>
        </tfoot>
      </table>
        </div>
      </div>
      <br>
      <br>
  </div>

  <!--fin seccion obreros -->
        <!--botones-->
      <center>
        <div class="btn-group">
          <button type="button" onclick="" class="btn btn-success" id="#">Aprobar</button>
          <button type="button" onclick="" class="btn btn-danger" id="#">Rechazar</button>
        </div>
      </center>
        <!--botones-->
      </div>
  <!--fin tercera carta-->

    </div>
  </div>
</div>




  @endsection
