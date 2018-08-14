function modal_agregar_rang_act_obrero(id, inicio, final, ra, desc){
  $("#modal_titulo").html("Editar Rango de Actuación del personal obrero")

  $("#modal_input_id_ra").val(id);
  $("#modal_input_r_inicio").val(inicio);
  $("#modal_input_r_final").val(final);
  $("#modal_textarea_ra").val(ra);
  $("#modal_textarea_descripcion").val(desc);


  var pie = `
    <button type="button" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
  `;
  $("#modal_pie").html(pie);

  $('#modal').modal("show");
}
