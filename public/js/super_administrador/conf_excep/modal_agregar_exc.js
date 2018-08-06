function modal_agregar_exc(){
  $("#modal_titulo").html("Agregar Exposición de asignación del rango excepcional")
  var cuerpo = `
    <div class="row">
      <div class="col-sm-12">
        <label>Exposición de asignación del rango excepcional</label>
        <input type="text" class="form-control" id="modal_input_odi">
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
