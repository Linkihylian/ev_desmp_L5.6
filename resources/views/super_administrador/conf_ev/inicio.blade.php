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

    <div class="progress" style="height: 20px;">
      <div class="progress-bar" id="progressbar" role="progressbar" style="width: 25%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-periodo-tab" data-toggle="pill" href="#pills-periodo" role="tab" aria-controls="pills-periodo" aria-selected="true">1. Periodo <i class="fas fa-angle-right"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-odi-tab" data-toggle="pill" href="#pills-odi" role="tab" aria-controls="pills-odi" aria-selected="false">2. ODI <i class="fas fa-angle-right"></i></a>
        <!--<a class="nav-link disabled" id="pills-odi-tab" data-toggle="pill" href="#pills-odi" role="tab" aria-controls="pills-odi" aria-selected="false">2. Objetivos de desempeño individual <i class="fas fa-angle-right"></i></a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link " id="pills-categeorias-tab" data-toggle="pill" href="#pills-categeorias" role="tab" aria-controls="pills-categeorias" aria-selected="false">3. Categorias <i class="fas fa-angle-right"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="pills-competencias-tab" data-toggle="pill" href="#pills-competencias" role="tab" aria-controls="pills-competencias" aria-selected="false">4. Competencias <i class="fas fa-angle-right"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="pills-duracion-tab" data-toggle="pill" href="#pills-duracion" role="tab" aria-controls="pills-duracion" aria-selected="false">5. Duración evaluación</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-periodo" role="tabpanel" aria-labelledby="pills-periodo-tab">
        <br><br>
        <p class="text-center">Seleccione el periodo a ser evaluado en un rango de seis meses</p><br><br>

        <div class="row">
          <div class="col-sm-4 offset-sm-4">
            <form>
              <div class="form-group">
                <label for="fecha_inicio">Fecha inicio</label>
                <input type="text" class="form-control" id="fecha_inicio" readonly style="background-color: white">
              </div>
              <div class="form-group">
                <label for="fecha_fin">Fecha fin</label>
                <input type="text" class="form-control" id="fecha_fin" disabled style="background-color: white">
              </div>
              <br>
              <button type="button" onclick="guardar_periodo()" class="btn btn-primary btn-block" id="guardar_btn">Listo</button>
            </form>

          </div>
        </div>
        <br>

      </div>

      <!-- OBjetivos de desempenno individual -->
      <div class="tab-pane fade" id="pills-odi" role="tabpanel" aria-labelledby="pills-odi-tab">
        <br>
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
                <h5 class="card-title">3. Tipo</h5>
                <select class="form-control" name="" id="tipo">
                  <option value="0">Todos los cargos</option>
                  <option value="1">Segun el cargo</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-8 offset-md-2 col-sm-12 pt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">4. Cargo</h5>
                <select class="form-control" name="" id="cargo">
                  <option value="1">1</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-sm-12 pt-5 text-center">
            <i class="fas fa-angle-double-down"></i>
          </div>

          <div class="col-sm-12 pt-5 table-responsive">

            <div class="card">
              <table class="table table-hover" id="tabla_odi">
                <thead class="bg-secondary text-light">
                  <tr>
                    <th scope="col" style="width: 100%">ODI</th>
                    <th scope="col" style="width: 100px;">Peso</th>
                    <th scope="col">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-primary" title="Agregar ODI" onclick="modal_agregar_odi()"><i class="fas fa-plus"></i></button>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-id-odi="555">
                    <td>1</td>
                    <td colspan="2">2</td>
                  </tr>
                  <tr>

                    <td>1</td>
                    <td colspan="2">2</td>
                  </tr>
                  <tr>

                    <td>1</td>
                    <td colspan="2">2</td>
                  </tr>
                  <tr>

                    <td>1</td>
                    <td colspan="2">2</td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>

          <div class="col-md-8 offset-md-2 col-sm-12 pt-5">
            <button type="button" onclick="" class="btn btn-primary btn-block" id="listo_odi">Listo</button>
          </div>

        </div>
      </div>

      <!-- Categorias -->
      <div class="tab-pane fade" id="pills-categeorias" role="tabpanel" aria-labelledby="pills-categeorias-tab">
        <div class="row">

          <div class="col-md-8 offset-md-2 col-sm-12 pt-5 table-responsive">
            <div class="card">
              <table class="table table-hover" id="tabla_categoria">
                <thead class="bg-secondary text-light">
                  <tr>
                    <th scope="col" style="width: 100%" colspan="2">1. Categoria</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 100%">
                      <input type="text" name="" value="" class="form-control">
                    </td>
                    <td colspan="2" >
                      <button type="button" class="btn btn-sm btn-block btn-primary" title="Eliminar" onclick=""><i class="fas fa-check"></i></button>
                    </td>
                  </tr>


                  <tr>
                    <td>1</td>
                    <td colspan="2" >
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-info" title="Modificar categoria" onclick="modal_modificar_categoria()"><i class="fas fa-edit"></i></i></button>
                        <button type="button" class="btn btn-sm btn-info" title="Consultar" onclick=""><i class="fas fa-search"></i></button>
                      </div>
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>


          <div class="col-sm-12 pt-5 text-center">
            <i class="fas fa-angle-double-down"></i>
          </div>




          <div class="col-md-8 offset-md-2 col-sm-12 pt-5 table-responsive">
            <div class="card">
              <table class="table table-hover" id="tabla_cargo">
                <thead class="bg-secondary text-light">
                  <tr>
                    <th scope="col" style="width: 100%" colspan="2">2. Cargo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 100%">
                      <select class="form-control" name="" id="categoria_cargo">
                        <option value="1">1</option>
                      </select>
                    </td>
                    <td colspan="2" >
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-primary" title="Eliminar" onclick=""><i class="fas fa-check"></i></button>
                      </div>
                    </td>
                  </tr>


                  <tr>
                    <td>1</td>
                    <td colspan="2" >
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-danger" title="Eliminar" onclick=""><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>


          <div class="col-md-8 offset-md-2 col-sm-12 pt-5">
            <button type="button" onclick="" class="btn btn-primary btn-block" id="listo_categoria">Listo</button>
          </div>



        </div>


      </div>

      <!-- Competencias -->
      <div class="tab-pane fade" id="pills-competencias" role="tabpanel" aria-labelledby="pills-competencias-tab">

        <div class="row">

          <div class="offset-md-1 col-md-5  mt-3" id="anteriores_comp_div">
            <div class="card" id="anteriores_comp_card">
              <h5 class="text-center mt-4"><i class="fas fa-clock" style="font-weight: 100; font-size: 70px;"></i></h5>
              <div class="card-body">
                <h5 class="card-title text-center">Competencias anteriores</h5>
                <p class="card-text">Utilizar competencias establecidas en otro periodo</p>
                <button type="button" name="button" class="btn btn-primary btn-block" onclick="comp_mostrar_periodos()">Anteriores competencias</button>
              </div>
            </div>
          </div>

          <div class="col-md-5 mt-3" id="nuevas_comp_div">
            <div class="card">
              <h5 class="text-center mt-4"><i class="fas fa-plus-square" style="font-weight: 100; font-size: 70px;"></i></h5>
              <div class="card-body">
                <h5 class="card-title text-center">Nuevas competencias</h5>
                <p class="card-text">Crear nuevas competencias para este periodo</p>
                <button type="button" name="button" class="btn btn-primary btn-block" onclick="mostrar_categorias()">Nuevas competencias</button>
              </div>
            </div>
          </div>

          <div class="col-sm-12 pt-5 text-center">
            <i class="fas fa-angle-double-down"></i>
          </div>


          <!-- lista de los periodos antiguos -->
          <div class="col-md-6 offset-3 mt-3" id="lista_competencias_periodo">
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action" style="cursor: pointer">Dapibus ac facilisis in</button>
              <button type="button" class="list-group-item list-group-item-action" style="cursor: pointer">Morbi leo risus</button>
              <button type="button" class="list-group-item list-group-item-action" style="cursor: pointer">Porta ac consectetur ac</button>
              <button type="button" class="list-group-item list-group-item-action" style="cursor: pointer">Vestibulum at eros</button>
              <button type="button" class="list-group-item list-group-item-action" style="cursor: pointer">Ninguno</button>
            </div>
          </div>

          <!-- lista de categorias -->
          <div class="col-md-8 offset-md-2 col-sm-12  pt-3" id="div_competencias_categoria">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">1. Categorias</h5>
                <select class="form-control" name="" id="comp_categoria">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
                <br><br>

                <p>Cargos asociados</p>
                <ul class="list-group">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>

              </div>
            </div>
          </div>


          <!-- card para gestionar las competencias empleados -->
          <div class="col-sm-12 pt-5" id="div_tabla_competencias">

            <div class="card">


              <div class="table-responsive">
                <table class="table table-hover " id="tabla_competencia">
                  <thead class="bg-secondary text-light">
                    <tr>
                      <th scope="col" >Competencia</th>
                      <th scope="col" >Descripción</th>
                      <th scope="col" >Peso</th>
                      <th scope="col">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-sm btn-info" title="Agregar competencia" onclick="modal_agregar_odi()"><i class="fas fa-plus"></i></button>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @for ($i=0; $i < 5; $i++)
                      <tr data-id-comp="555">
                        <td>Slow network is detected. See https://www.chromestatus.com/feature/5636954674692096 for more details. Fallback font will be used while loading: http://127.0.0.1:8000/fontawesome/webfonts/fa-solid-900.woff2</td>
                        <td>Slow network is detected. See https://www.chromestatus.com/feature/5636954674692096 for more details. Fallback font will be used while loading: http://127.0.0.1:8000/fontawesome/webfonts/fa-solid-900.woff2</td>
                        <td colspan="2">2</td>

                      </tr>
                    @endfor
                  </tbody>
                </table>
              </div>

            </div>

          </div>


        </div>





        <div class="col-md-8 offset-md-2 col-sm-12 pt-5">
          <button type="button" onclick="" class="btn btn-primary btn-block" id="listo_categoria">Listo</button>
        </div>


      </div>



      <!-- duracion -->
      <div class="tab-pane fade" id="pills-duracion" role="tabpanel" aria-labelledby="pills-duracion-tab">

        <br><br>
        <p class="text-center">Seleccione el tiempo que estará activo el el sistema para realizar las evaluaciones</p><br><br>

        <div class="row">
          <div class="col-sm-4 offset-sm-4">
            <form>
              <div class="form-group">
                <label for="fecha_inicio_evaluacion">Fecha inicio</label>
                <input type="text" class="form-control" id="fecha_inicio_evaluacion" readonly style="background-color: white">
              </div>
              <div class="form-group">
                <label for="fecha_fin_evaluacion">Fecha fin</label>
                <input type="text" class="form-control" id="fecha_fin_evaluacion" readonly style="background-color: white">
              </div>
              <br>
              <button type="button" onclick="" class="btn btn-primary btn-block" id="guardar_eval_btn">Activar evaluación</button>
            </form>

          </div>
        </div>
        <br>

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
        ...
      </div>
      <div class="modal-footer" id="modal_pie">

      </div>
    </div>
  </div>
</div>

<div class="" id="salida_periodo"></div>

@endsection
@section('js')

<script src="{{ asset("js/menu.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/jquery-ui.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/datepicker-es.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/selectize.min.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/evaluacion.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/ajuste_rango_fechas.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/ajuste_rango_fechas_activar_ev.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/guardar_periodo.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/modal_agregar_odi.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/modal_editar_odi.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/comp_mostrar_periodos.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/evaluacion/mostrar_categorias.js") }}" charset="utf-8"></script>

<script type="text/javascript">



</script>
@endsection
