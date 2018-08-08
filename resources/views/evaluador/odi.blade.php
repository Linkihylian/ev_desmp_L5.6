@extends('layouts/layout')
@extends('layouts/nav')
@section ('title','Inicio')
@section('titulo')

@endsection

@section ('contenido')
  <div class="card">
    <div class="card-body">
      <h4 class="text-center"><strong>Objetivos De Desempeño Individual</strong></h4>
      <br><br>
      <div class="row">
        <div class="col-md-4">
          <div class="card border border-secondary">
            <div class="card-header text-white bg-secondary">Dirección - Oficina</div>
            <div class="card-body">
              <br>
              <select class="form-control" name="direccion" onchange="">

              </select>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border border-secondary">
           <div class="card-header text-white bg-secondary">Coordinaciones</div>
           <div class="card-body">
             <br>
             <select class="form-control" name="">

             </select>
             <br>
             <div class="radio">
               <label>

                <input type="radio" name="" value="" onclick="" id="odicoor">
              </label>
              <div class="radio">
                <label>
                  <input type="radio" name="" value="" onclick="" id="odicargo">
                </label>
                <div class="radio" style="display:none">
                  <label>
                    <input type="radio" name="" value="" onclick="">
                  </label>

                </div>
              </div>
             </div>
           </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-secundary" id="cargo" style="display:none;">
            <div class="card-header">Cargos</div>
            <div class="card-body">
              <select class="form-control selectized" name="cargos" onchange="" tabindex="" style="display:none;">
                <option value selected="selected"></option>
              </select>
              <div class="selectize-control form-control single">
                <div class="selectize-input items not-full has-options">
                  <input type="text" autocomplete="off" tabindex style="width:4px;">
                </div>
                <div class="selectize-dropdown single form-control" style="display:none;">

                </div>
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
@endsection
