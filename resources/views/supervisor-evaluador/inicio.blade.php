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
    <ul class="list-group" style="    background-color: #f8f9fa;">
  <li class="list-group-item">  <h5 class="card-title text-center">  Evaluaciones: Oficina de Tecnologia de la Informacion</h5></li>
  </ul>


  <center>
      <div class="col-sm-8 col-sm-offset-8">
          <!--  <label for="">CordinACION</label>-->
            <select class="form-control " name="coordinacion" onclick="" style="margin-left:auto;margin-top:30px;">
                <option value="" selected="" disabled="">SELECCIONE COORDINACIÓN</option>
                <option value="OFICINA DE TECNOLOGIA DE LA INFORMACION">OFICINA DE TECNOLOGIA DE LA INFORMACION</option>
                <option value="COORDINACION DE CENTRO DE DIGITALIZACION">COORDINACION DE CENTRO DE DIGITALIZACION</option>
                <option value="COORDINACION DE CENTRO DE DATOS">COORDINACION DE CENTRO DE DATOS</option>
                <option value="COORDINACION DE TELECOMUNICACIONES">COORDINACION DE TELECOMUNICACIONES</option>
                <option value="COORDINACION DE SISTEMAS">COORDINACION DE SISTEMAS</option>
                <option value="COORDINACION DE CENTRO INTEGRAL DE SOLUCIONES">COORDINACION DE CENTRO INTEGRAL DE SOLUCIONES</option>
                <option value="COORDINACION DE SOPORTE TECNICO">COORDINACION DE SOPORTE TECNICO</option>
                <option value="COORDINACION GESTION DE CALIDAD DE SERVICIOS Y PROCESOS">COORDINACION GESTION DE CALIDAD DE SERVICIOS Y PROCESOS</option>
                <option value="COORDINACION DE INNOVACION Y PROYECTOS TECNOLOGICOS">COORDINACION DE INNOVACION Y PROYECTOS TECNOLOGICOS</option>
              </select>
          </div>
        </center>


          <div class="" id="salida" style="">

            <br>



              <div class="row">


                <div class="col-sm-12 pt-5 table-responsive">
                  <div class="card" style="border: 1px solid rgb(255, 255, 255);">
                    <table class="table table-hover " >
                      <thead class="bg-secondary text-white ">
                        <tr style="height: 50px">
                          <th>Nombre y apellido</th>
                          <th>Cédula de identidad</th>
                          <!--<th>Coordinacion</th>
                          <th>Dirección adscrita</th>-->
                          <th>Cargo</th>
                          <th>Acción</th>
                          <th>Califición</th>
                          <th>Estatus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--<tr>
                        <td>Maria</td>
                        <td>11.111.112</td>


                        <td>Analista</td>
                        <td class="bg-info"><a href="http://intranet.saren.gob.ve/evaluacion_desempenio/index.php/evaluador/evaluacionODI"><button type="button" class="btn btn-info btn-block">Evaluar</button></a></td>
                        <td></td>
                        <td class="bg-danger text-center"><strong class="text-danger">Por revisar</strong></td>
                      </tr> -->

                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <!---<tr>
                      <td>Maria</td>
                      <td>11.111.112</td>


                      <td>Analista</td>
                      <td class=""><a href="http://intranet.saren.gob.ve/evaluacion_desempenio/index.php/supervisorEvaluador/revisarEvaluacionODI"><button type="button" class="btn btn-default btn-block btn-sm ">Por revisar</button></a></td>
                      <td class="text-center">380</td>
                      <td class="text-center">1</td>
                    </tr> -->

                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-sm-1">

            </div>
          </div>








        </div>
      </div>
      </div>
    



  @endsection
