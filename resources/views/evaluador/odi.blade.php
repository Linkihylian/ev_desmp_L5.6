@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Crear ODI')

@section('contenido')


<div class="card">
  <div class="card-body">


    <h5 class="card-title text-center pt-5" >Objetivos de Desempeño Individual</h5>

    <div class="row">

      <div class="col-md-6 offset-3  mt-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">1. Dirección | Oficina</h5>
            <select class="form-control" name="" id="direccion_oficina">
              <option value="1">1</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-6 offset-3  mt-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">2. Coordinación</h5>
            <select class="form-control" name="" id="coordinacion">
              <option value="1">1</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-6 offset-3  mt-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">3. Cargos</h5>
            <select class="form-control" name="" id="cargos">
              <option value="1">1</option>
            </select>
          </div>
        </div>
      </div>


      <div class="col-sm-12 pt-5 text-center">
        <i class="fas fa-angle-double-down"></i>
      </div>
    </div>
<br>
    <div class="card table-responsive">
      <table class="table table-hover" id="obj_desemp_indiv">
        <thead class="bg-secondary text-white">
          <tr>
            <th >Objetivo De Desempeño Individual</th>
            <th >Peso</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Total</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>



@endsection
@section('js')
<script src="{{ asset("js/menu.js") }}" charset="utf-8"></script>
@endsection
