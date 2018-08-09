$(function(){

  var url = window.location.href

  var pat = /normas/;
  if ( pat.test(url) ) {
    $("#normas").addClass("active");
  }

  var pat = /evaluacion\//;
  if ( pat.test(url) ) {
    $("#nav_evaluacion").addClass("active");
  }

  var pat = /evaluaciones_realizadas/;
  if ( pat.test(url) ) {
    $("#nav_ev_realizadas").addClass("active");
  }
  var pat = /evaluar/;
  if ( pat.test(url) ) {
    $("#nav_evaluar").addClass("active");
  }
  var pat = /crear_odi/;
  if ( pat.test(url) ) {
    $("#nav_crear_odi").addClass("active");
  }
})
