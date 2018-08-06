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
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2. Obrero </a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <h5 class="card-title text-center pt-5" >Rangos de Actuación para el personal Administrativo, Técnico - Profesional y Supervisorio</h5>

        <div class="table-responsive card mt-5">
          <table class="table table-hover" id="tabla_excp">
            <thead class="bg-secondary text-light">
              <tr>
                <th scope="col">Inicio</th>
                <th scope="col">Final</th>
                <th scope="col">Rango de actuación</th>
                <th scope="col">Descripción</th>
                <th scope="col" style="width: 20px"><button type="button" name="button" class="btn btn-primary btn-block" onclick="modal_agregar_exc()"><i class="fas fa-plus"></i></button></th>
              </tr>
            </thead>
            <tbody>
              <tr data-id-excp="111">
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
              </tr>

            </tbody>
          </table>
        </div>

      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">.55..</div>
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
        ...
      </div>
      <div class="modal-footer" id="modal_pie">

      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script type="text/javascript">



</script>
@endsection
