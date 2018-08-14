$(function(){

  var url = window.location.href

  var pat = /normas/;
  if ( pat.test(url) ) {
<<<<<<< HEAD
    $("#nav_super_administrador").addClass("active");
=======
    $("#normas").addClass("active");
>>>>>>> evaluador
  }

  var pat = /evaluacion\//;
  if ( pat.test(url) ) {
    $("#nav_evaluacion").addClass("active");
  }

  var pat = /evaluaciones_realizadas/;
  if ( pat.test(url) ) {
    $("#nav_ev_realizadas").addClass("active");
  }
<<<<<<< HEAD
  var pat = /evaluador/;
  if ( pat.test(url) ) {
    $("#nav_evaluador").addClass("active");
  }
  var pat = /evaluador/crear_odi;
  if ( pat.test(url) ) {
    $("#nav_ev_crear_odi").addClass("active");
  }

=======
  var pat = /evaluar/;
  if ( pat.test(url) ) {
    $("#nav_evaluar").addClass("active");
  }
  var pat = /crear_odi/;
  if ( pat.test(url) ) {
    $("#nav_crear_odi").addClass("active");
  }
  var pat = /auditoria/;
  if ( pat.test(url) ) {
    $("#nav_auditoria").addClass("active");
  }
  var pat = /odis_rechazadas/;
  if ( pat.test(url) ) {
    $("#nav_recha_odi").addClass("active");
  }
>>>>>>> evaluador
})
