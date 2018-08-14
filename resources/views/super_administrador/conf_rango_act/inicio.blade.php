@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Rango de actuación')
@section("css")

@endsection

@section('contenido')


<div class="card">
  <div class="card-body">


    <ul class="nav nav-pills" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1. Empleado <i class="fas fa-angle-right"></i> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2. Obrero <i class="fas fa-angle-right"></i> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="final-tab" data-toggle="tab" href="#final" role="tab" aria-controls="profile" aria-selected="false">3. Final </a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <h5 class="card-title text-center pt-5" >Rangos de Actuación para el personal Administrativo, Técnico - Profesional y Supervisorio</h5>

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

        <div class="col-md-8 offset-md-2 col-sm-12 pt-5">
          <button type="button" onclick="" class="btn btn-primary btn-block" id="listo_categoria">Listo</button>
        </div>


      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <h5 class="card-title text-center pt-5" >Rango de Actuación del personal obrero</h5>

        <div class="table-responsive card mt-5">
          <table class="table table-hover" id="tabla_ra_obrero">
            <thead class="bg-secondary text-light">
              <tr>
                <th scope="col">Inicio</th>
                <th scope="col">Final</th>
                <th scope="col">Rango de actuación</th>
                <th scope="col">Descripción</th>
                <th scope="col" style="width: 20px"><button type="button" name="button" class="btn btn-primary btn-block" onclick="modal_agregar_rang_act_obrero()"><i class="fas fa-plus"></i></button></th>
              </tr>
            </thead>
            <tbody>
              <tr data-id-excp="111">
                <td>1</td>
                <td>7</td>
                <td>Ra obrero</td>
                <td colspan="2"> dewsc obrero </td>
              </tr>

            </tbody>
          </table>
        </div>



      </div>
      <div class="tab-pane fade" id="final" role="tabpanel" aria-labelledby="final-tab">
        <div class="row mt-5">
          <div class="col-sm-4 offset-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Final</h5>
                <p>Para continuar debe crear la Exposición de asignación del rango excepcional </p>
                <div class="col-md-8 offset-md-2 col-sm-12 pt-5">
                  <a href="#" class="btn btn-primary btn-block">Continuar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
<script src="{{ asset("js/super_administrador/conf_rango_act/modal_agregar_rang_act_obrero.js") }}" charset="utf-8"></script>

<script src="{{ asset("js/super_administrador/conf_rango_act/propiedades_tabla_emp.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/ra_actualizar_tabla_emp.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/ra_guardar_emp.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_rango_act/ra_modificar_emp.js") }}" charset="utf-8"></script>
<script type="text/javascript">



</script>
@endsection
