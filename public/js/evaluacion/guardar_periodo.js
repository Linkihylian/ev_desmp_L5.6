function guardar_periodo(){

  swal.showLoading();

  $.ajax({
      type: "POST",
      url: base_url+"/pagina/prueba",
      data:  {
        datos: "valor",
        datos: "valor",
      },
      success: function(data){
        swal.close();
         $("#id_salida").fadeIn().html(data);
     },
     error: function (xhr, ajaxOptions, thrownError) {
         alert(xhr.status+" "+thrownError+"\n\n",datos.error);
     }
   });

}
