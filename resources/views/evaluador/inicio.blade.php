@extends('layouts/layout')
@extends('layouts/nav')
@section ('title','Inicio')

@section ('contenido')
  <div class="card">
    <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="card-title text-center">
                Datos del evaluador
            </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card table-responsive">
              <table class="table table-hover">
                <thead class="text-light bg-secondary">
                  <tr>
                    <th>Nombre y apellido</th>
                    <th>Cedula de identidad</th>
                    <th>Coordinacion</th>
                    <th>Direccion - Oficina</th>
                    <th>Cargo</th>
                    <th>Fecha de ingreso</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sona</td>
                    <td>Invocador</td>
                    <td>League of Legend</td>
                    <td>Bot</td>
                    <td>Soporte</td>
                    <td>2015</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <br><br>
        <div class="row">
          <div class="col-md-12">
            <h5 class="card-title text-center">
               Personal de la oficina
            </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="input-group">
              <input type="text" class="form-control border border-secondary" placeholder="Agregar personal C.I" name="cedula" onkeypress="" minlength="7" maxlength="9" />
              <span class="input-group-btn">
                <button type="button" name="button" class="btn" onclick="buscarPersonal()">
                  <span class="fa fa-search" aria-hidden="true">
                  </span>
                </button>
              </span>
            </div>

          </div>
        </div>
        <br>
      <div class="row">
        <div class="col-md-12">
          <div class="card table-responsive">
            <table class="table table-hover">
              <thead class="text-white bg-secondary">
                <tr>
                  <th>Nombre y apellido</th>
                  <th>Cedula de identidad</th>
                  <th>Coordinacion</th>
                  <th>Direccion adscrita</th>
                  <th>Cargo</th>
                  <th>Accion</th>
                  <th>Calificacion</th>
                  <th>Estatus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sona1</td>
                  <td>Invocador</td>
                  <td>League of Legend</td>
                  <td>Bot</td>
                  <td>Soporte</td>
                  <td></td>
                  <td>***</td>
                  <td>activa</td>
                </tr>
                <tr>
                  <td>Sona2</td>
                  <td>Invocador</td>
                  <td>League of Legend</td>
                  <td>Bot</td>
                  <td>Soporte</td>
                  <td></td>
                  <td>***</td>
                  <td>activa</td>
                </tr>
                <tr>
                  <td>Sona3</td>
                  <td>Invocador</td>
                  <td>League of Legend</td>
                  <td>Bot</td>
                  <td>Soporte</td>
                  <td></td>
                  <td>***</td>
                  <td>activa</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
