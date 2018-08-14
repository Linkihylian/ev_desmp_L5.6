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
      <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Direcciones y Oficina</h5>
              <div class="" style="height: 200px">


              </div>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Oficinas que han realizado la evaluación
                  <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Oficinas sin evaluar
                  <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Total evaluados
                  <span class="badge badge-primary badge-pill">1</span>
                </li>
              </ul>
            </div>
          </div>
      </div>


      <div class="col-sm-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Direcciones y Oficinas sin realizar la evaluación</h5>
            <div class="table-responsive">

      <table id="tabla_dir_of_no_eval" class="table" >
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
<script src="{{ asset("js/super_administrador/reportes/dir_of.js") }}" charset="utf-8"></script>
<script type="text/javascript">



</script>
@endsection
