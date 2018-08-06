@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Evaluaciones realizadas')
@section("css")
<link rel="stylesheet" href="{{ asset("css/selectize.bootstrap3.css") }}">
<link rel="stylesheet" href="{{ asset("css/datatables.min.css") }}">
@endsection

@section('contenido')


<div class="card">
  <div class="card-body">


    <h5 class="card-title text-center pt-5" >Evaluaciones realizadas</h5>

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
            <select class="form-control" name="">
              <option value="1">1</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-6 offset-3  mt-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">3. Periodo</h5>
            <select class="form-control" name="">
              <option value="1">1</option>
            </select>
          </div>
        </div>
      </div>


      <div class="col-sm-12 pt-5 text-center">
        <i class="fas fa-angle-double-down"></i>
      </div>


    </div>




    <div class="table-responsive">
      <table class="table table-hover" id="tabla_ev_realizadas">
        <thead class="bg-secondary text-white">
          <tr>
            <th >ss</th>
            <th >First</th>
            <th >Last</th>
            <th >Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>



@endsection
@section('js').
<script src="{{ asset("js/datatables.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/selectize.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/ev_realizadas/inicio.js") }}" charset="utf-8"></script>
<script type="text/javascript">



</script>
@endsection
