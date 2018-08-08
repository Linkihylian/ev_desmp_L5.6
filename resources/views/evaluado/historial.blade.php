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



    <h5 class="card-title text-center">  Historial Evaluador</h5>
      <div class="col-sm-12 pt-2 table-responsive">

        <div class="card">
          <table class="table table-hover">
            <thead class="thead-light">
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

      <div class="col-md-8 offset-md-2 col-sm-12 pt-5">
        <button type="button" onclick="" class="btn btn-primary btn-block" id="listo_odi">Listo</button>
      </div>

    </div>
        </div>
      </div>


  @endsection
