@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Rango de actuación')
@section("css")

@endsection

@section('contenido')


<div class="card">
  <div class="card-body">

    <h5 class="card-title text-center pt-5" >Rangos de Actuación</h5>

    <div class="row">
      <div class="col-md-2 offset-md-5 mt-5">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary active" >
            <input type="radio" name="opcion" id="option1" autocomplete="off" value="0" checked onchange="ra_actualizar_tabla_emp()"> Empleado
          </label>
          <label class="btn btn-secondary" >
            <input type="radio" name="opcion" id="option2" autocomplete="off" value="1" onchange="ra_actualizar_tabla_emp()" > Obrero
          </label>
        </div>

      </div>
    </div>

    <div class="table-responsive card mt-5">
      <table class="table table-hover" id="tabla_ra_empleado">
        <thead class="bg-secondary text-light">
          <tr>
            <th scope="col">Inicio</th>
            <th scope="col">Final</th>
            <th scope="col">Rango de actuación</th>
            <th scope="col">Descripción</th>
            <th scope="col" style="width: 20px"><button type="button" name="button" class="btn btn-primary btn-block" onclick="modal_agregar_rang_act()"><i class="fas fa-plus"></i></button></th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>




  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_titulo">Cargando...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_cuerpo">
        <input type="hidden" name="" value="" id="modal_input_id_ra">
        <div class="row">
          <div class="col-sm-6 form-group">
            <label>Inicio</label>
            <input type="number" class="form-control" id="modal_input_r_inicio">
          </div>
          <div class="col-sm-6 form-group">
            <label>Final</label>
            <input type="number" class="form-control" id="modal_input_r_final">
          </div>
          <div class="col-sm-12 form-group">
            <label>Rango de actuación</label>
            <textarea rows="3" class="form-control" id="modal_textarea_ra"></textarea>
          </div>
          <div class="col-sm-12 form-group">
            <label>Descripción</label>
            <textarea rows="3" class="form-control" id="modal_textarea_descripcion"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer" id="modal_pie">

      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script src="{{ asset("js/menu.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/inicio.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/modal_agregar_rang_act.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/modal_editar_rang_act.js") }}" charset="utf-8"></script>


<script src="{{ asset("js/super_administrador/conf_rango_act/propiedades_tabla_emp.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/ra_actualizar_tabla_emp.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/ra_guardar_emp.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/ra_modificar_emp.js") }}" charset="utf-8"></script>
<script type="text/javascript">



</script>
@endsection
