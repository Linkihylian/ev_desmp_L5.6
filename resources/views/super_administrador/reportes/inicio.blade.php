@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Rango de actuación')
@section("css")
<link rel="stylesheet" href="{{ asset("css/selectize.bootstrap3.css") }}">
<link rel="stylesheet" href="{{ asset("css/datatables.min.css") }}">

@endsection

@section('contenido')


<div class="card">
  <div class="card-body">


    <div class="row">
      <div class="col-md-8 offset-md-2 col-sm-12  pt-3">
        <div class="card ">
          <div class="card-body">
            <h5 class="card-title">1. Dirección | Oficina</h5>
            <select class="form-control" name="" id="dir_oficina">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-8 offset-md-2 col-sm-12 pt-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">2. Coordinación</h5>
            <select class="form-control" name="" id="coordinacion">
              <option value="1">1</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-8 offset-md-2 col-sm-12 pt-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">3. Periodo</h5>
            <select class="form-control" name="" id="periodo">
              <option value="1">1</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-sm-12 pt-5 text-center">
        <i class="fas fa-angle-double-down"></i>
      </div>


      <!-- rechazados / aprobados por super administrador -->
      <div class="col-sm-12 col-md-6 mt-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Estado evaluaciones </h5>

              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="" style="background: grey; height: 200px" >

                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Aprobados
                  <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rechazados
                  <span class="badge badge-primary badge-pill">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Total evaluaciones
                  <span class="badge badge-primary badge-pill">1</span>
                </li>
              </ul>

              </div>
            </div>
          </div>

          <!-- evaluador -->
          <div class="col-sm-12 col-md-6 mt-5">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Evaluadores</h5>
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead class="bg-secondary text-white">
                      <tr>
                        <th scope="col">Cédula</th>
                        <th scope="col">Nombre y apellido</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>

                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>

          <!-- Rango de acatuacion -->
          <div class="col-sm-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Rango de actuación</h5>
                <div class="" style="height: 500px">

                </div>
              </div>
            </div>
          </div>


          <!-- Personal sin evaluar -->
          <div class="col-sm-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Personal sin evaluar</h5>


                <table id="tabla_personal_no_eval" class="table" style="width:100%">
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
<script src="{{ asset("js/selectize.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/reportes/inicio.js") }}" charset="utf-8"></script>
<script type="text/javascript">



</script>
@endsection
