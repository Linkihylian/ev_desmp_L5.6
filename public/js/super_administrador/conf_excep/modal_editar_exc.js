function modal_editar_exc(id, excp){
  $("#modal_titulo").html("Editar Exposición de asignación del rango excepcional")

  var cuerpo = `
    <div class="row">
      <div class="col-sm-12">
        <label>Exposición de asignación del rango excepcional</label>
        <input type="text" class="form-control" id="modal_input_excp" value=`+excp+`>
        <input type="hidden" class="form-control" id="modal_input_excp_id" value=`+id+`>

      </div>
    </div>
  `;
  $("#modal_cuerpo").html(cuerpo)

  var pie = `
    <button type="button" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-danger">Eliminar</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
  `;
  $("#modal_pie").html(pie)

  $('#modal').modal("show")
}
