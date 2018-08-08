@extends('layouts/layout')
@extends('layouts/nav')
@section ('title','Inicio')
@section('titulo')
  <strong>Evaluacion del Trabajador</strong>
@endsection

@section ('contenido')
  <div class="card">
    <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">
               <strong> Datos del evaluador</strong>
            </h4>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-hover border border-secondary">
                <thead class="text-white bg-secondary">
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
                    <th>Sona</th>
                    <th>Invocador</th>
                    <th>League of Legend</th>
                    <th>Bot</th>
                    <th>Soporte</th>
                    <th>2015</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <br><br>
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">
               <strong>Personal de la oficina</strong>
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="input-group">
              <input type="text" class="form-control border border-secondary" placeholder="Agregar personal C.I" name="cedula" onkeypress="" minlength="7" maxlength="9" />
              <span class="input-group-btn">
                <button type="button" name="button" class="btn" onclick="">
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
          <div class="table-responsive">
            <table class="table table-hover border border-info">
              <thead class="text-white bg-info">
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
                  <th>Sona1</th>
                  <th>Invocador</th>
                  <th>League of Legend</th>
                  <th>Bot</th>
                  <th>Soporte</th>
                  <th></th>
                  <th>***</th>
                  <th>activa</th>
                </tr>
                <tr>
                  <th>Sona2</th>
                  <th>Invocador</th>
                  <th>League of Legend</th>
                  <th>Bot</th>
                  <th>Soporte</th>
                  <th></th>
                  <th>***</th>
                  <th>activa</th>
                </tr>
                <tr>
                  <th>Sona3</th>
                  <th>Invocador</th>
                  <th>League of Legend</th>
                  <th>Bot</th>
                  <th>Soporte</th>
                  <th></th>
                  <th>***</th>
                  <th>activa</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
