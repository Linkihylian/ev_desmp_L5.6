@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Login')
@section("css")
<link rel="stylesheet" href="{{ asset("css/jquery-ui.css") }}">
<link rel="stylesheet" href="{{ asset("css/datepicker_personal.css") }}">
@endsection

@section('contenido')


<div class="card">
  <div class="card-body">

    <div class="progress" style="height: 20px;">
      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-periodo-tab" data-toggle="pill" href="#pills-periodo" role="tab" aria-controls="pills-periodo" aria-selected="true">1. Periodo ></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" id="pills-odi-tab" data-toggle="pill" href="#pills-odi" role="tab" aria-controls="pills-odi" aria-selected="false">2. Objetivos de desempeño individual ></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" id="pills-competencias-tab" data-toggle="pill" href="#pills-competencias" role="tab" aria-controls="pills-competencias" aria-selected="false">3. Competencias ></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" id="pills-duracion-tab" data-toggle="pill" href="#pills-duracion" role="tab" aria-controls="pills-duracion" aria-selected="false">4. Duración evaluación</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-periodo" role="tabpanel" aria-labelledby="pills-periodo-tab">
        <br><br>
        <p class="text-center">Seleccione el periodo a ser evaluado en un rango de seis meses</p><br><br>

        <div class="row">
          <div class="col-sm-4 offset-sm-4">
            <form>
              <div class="form-group">
                <label for="fecha_inicio">Fecha inicio</label>
                <input type="text" class="form-control" id="fecha_inicio" readonly style="background-color: white">
              </div>
              <div class="form-group">
                <label for="fecha_fin">Fecha fin</label>
                <input type="text" class="form-control" id="fecha_fin" disabled style="background-color: white">
              </div>
              <br>
              <button type="button" onclick="guardar_periodo()" class="btn btn-primary btn-block" id="guardar_btn">Guardar</button>
            </form>

          </div>
        </div>
        <br>

      </div>
      <div class="tab-pane fade" id="pills-odi" role="tabpanel" aria-labelledby="pills-odi-tab">..2.</div>
      <div class="tab-pane fade" id="pills-competencias" role="tabpanel" aria-labelledby="pills-competencias-tab">..3.</div>
      <div class="tab-pane fade" id="pills-duracion" role="tabpanel" aria-labelledby="pills-duracion-tab">..4.</div>
    </div>






  </div>
</div>

<div class="" id="salida_periodo"></div>

@endsection
@section('js')

<script src="{{ asset("js/jquery-ui.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/datepicker-es.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/sweetalert2.all.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/evaluacion/ajuste_rango_fechas.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/evaluacion/guardar_periodo.js") }}" charset="utf-8"></script>
@endsection
