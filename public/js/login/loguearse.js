function loguearse(){

swal.showLoading();

  $.ajax({
      type: "POST",
      url: base_url+"/login",
      data: {
        usuario : $("#usuario").val(),
        clave : $("#clave").val(),
        _token: $("[name='csrf-token']").attr('content')
      },
      success: function(data){
        swal.close();
        if (data == 0){
          $("#modal").modal("hide");
          swal({
            type: 'success',
            title: 'Ok',
            text: 'Operacion realizada'
          })
          window.location.replace("evaluador/evaluar");
          }
          else if (data == 1){
            swal({
              type: 'error',
              title: 'Error',
              text: 'Ocurrió un error al realizar la operación',
            })
          }
          else {
            swal({
              type: 'error',
              title: 'Error',
              text: 'Error desconocido',
            })
          }
          $("#respuesta_login").html(data);
      },
      error: function (xhr, ajaxOptions, thrownError) {
          //alert(xhr.status+" "+thrownError+"\n\n", "Ocurrió un error ");
          swal.close();
          swal({
            type: 'error',
            title: 'Error',
            text: '¡Algo salió mal! - ' + xhr.status+" "+thrownError+"\n\n",
          })

        }
  });

}
