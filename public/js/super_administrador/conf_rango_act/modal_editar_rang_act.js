function modal_editar_rang_act(id, inicio, final, ra, desc){
  $("#modal_titulo").html("Editar Rangos de Actuación para el personal Administrativo, Técnico - Profesional y Supervisorio")
  var cuerpo = `
    <div class="row">
      <div class="col-sm-6 form-group">
        <label>Inicio</label>
        <input type="number" class="form-control" id="modal_input_r_inicio" value="`+inicio+`">
      </div>
      <div class="col-sm-6 form-group">
        <label>Final</label>
        <input type="number" class="form-control" id="modal_input_r_final" value="`+final+`">
      </div>
      <div class="col-sm-12 form-group">
        <label>Rango de actuación</label>
        <textarea rows="3" class="form-control">`+ra+`</textarea>
      </div>
      <div class="col-sm-12 form-group">
        <label>Descripción</label>
        <textarea rows="3" class="form-control">`+desc+`</textarea>
      </div>
    </div>
  `;
  $("#modal_cuerpo").html(cuerpo)

  var pie = `
    <button type="button" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
  `;
  $("#modal_pie").html(pie)

  $('#modal').modal("show")
}
