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
