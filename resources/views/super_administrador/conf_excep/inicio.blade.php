@extends('layouts/layout')
@extends('layouts/nav')
@section('title','Exposición de asignación del rango excepcional')
@section("css")

@endsection

@section('contenido')


<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" >Exposición de asignación del rango excepcional</h5>

    <div class="table-responsive card mt-5">
      <table class="table table-hover" id="tabla_excp">
        <thead class="bg-secondary text-light">
          <tr>
            <th scope="col">Exposición</th>
            <th scope="col" style="width: 20px"><button type="button" name="button" class="btn btn-primary btn-block" onclick="modal_agregar_exc()"><i class="fas fa-plus"></i></button></th>
          </tr>
        </thead>
        <tbody>
          <tr data-id-excp="111">
            <td colspan="2">1</td>
          </tr>

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
        ...
      </div>
      <div class="modal-footer" id="modal_pie">

      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script src="{{ asset("js/menu.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_excep/inicio.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_excep/modal_agregar_exc.js") }}" charset="utf-8"></script>
<script src="{{ asset("js/super_administrador/conf_excep/modal_editar_exc.js") }}" charset="utf-8"></script>
<script type="text/javascript">



</script>
@endsection
