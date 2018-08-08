@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Rango de actuación')
@section("css")
<link rel="stylesheet" href="{{ asset("css/datatables.min.css") }}">
@endsection

@section('contenido')


<div class="card">
  <div class="card-body">

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






      <div class="col-sm-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Evaluaciones  <button type="button" name="button" class="btn btn-primary float-right">Excel</button> </h5>
            <div class="table-responsive mt-5">

      <table id="tabla_evaluaciones" class="table" >
        <thead class="bg-secondary text-white">
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
          </tbody>
        </table>

            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>



@endsection
@section('js')
<script src="{{ asset("js/menu.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/datatables.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/reportes/personal.js") }}" charset="utf-8"></script>
<script type="text/javascript">



</script>
@endsection
