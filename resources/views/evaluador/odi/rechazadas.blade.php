@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Crear ODI')

@section('contenido')


<div class="card">
  <div class="card-body">
    <h5 class="text-center card-title"> ODI Rechazadas</h5>
    <div class="row">
      <div class="card table-responsive">
        <table class="table table-hover" id="obj_desemp_indiv">
          <thead class="bg-secondary text-white">
            <tr>
              <th>#</th>
              <th>Objetivo De Desempeño Individual</th>
              <th>Coordinación</th>
              <th>Cargo</th>
              <th>Peso</th>
              <th>Estado Director</th>
              <th>Estado RRHH</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5</td>
              <td>askdjalsjdaklsjdlkajsdlkajslkdjalskdlkasj</td>
              <td>pocashontas</td>
              <td>preso</td>
              <td>100kg</td>
              <td>Activo</td>
              <td>Desactivo</td>
            </tr>
          </tbody>
        </table>
      </div>

      </div>

  </div>
</div>



@endsection
@section('js')
<script src="{{ asset("js/menu.js") }}" charset="utf-8"></script>
@endsection
