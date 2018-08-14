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
      <ul class="list-group" style="    background-color: #f8f9fa;">
        <li class="list-group-item">  <h5 class="card-title text-center"> Historial Evaluador</h5></li>
      </ul>
      <br>

          <!--fin de cartas-->



          <!--inicio de tabla-->
          <div class="row">
            <div class="col-sm-12 pt-1 table-responsive">
              <div class="card" style="border: 1px solid rgb(255, 255, 255);">
                <table class="table table-hover table-bodered" >
                <thead class="bg-secondary text-white ">

                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Periodo</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Jacob</td>
                  </tr>
                </tbody>

              </table>
              </div>
            </div>
          </div>
      <!--fin de cartas-->


    </div>
  </div>




  @endsection
