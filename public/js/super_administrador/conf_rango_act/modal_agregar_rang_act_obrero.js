function modal_agregar_rang_act_obrero(){
  $("#modal_titulo").html("Agregar Rango de Actuación del personal obrero")
  var cuerpo = `
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
        <textarea rows="3" class="form-control"></textarea>
      </div>
      <div class="col-sm-12 form-group">
        <label>Descripción</label>
        <textarea rows="3" class="form-control"></textarea>
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
