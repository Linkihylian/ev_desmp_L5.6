@section('nav')
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item " id="nav_super_administrador">
          <a class="nav-link" href="{{ url("/super_administrador/normas") }}">Normas </a>
        </li>
        <li class="nav-item dropdown " id="nav_evaluacion">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Evaluación
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url("/super_administrador/evaluacion/configurar_rango_actuacion") }}">1. Rango de actuación</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/evaluacion/configurar_excepcional") }}">2. Exposición de asignación del rango excepcional</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/evaluacion/configurar_evaluacion") }}">3. Configurar</a>
          </div>
        </li>

        <li class="nav-item " id="nav_ev_realizadas">
          <a class="nav-link " href="{{ url("/super_administrador/evaluaciones_realizadas") }}">Evaluaciones realizadas </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Evaluar resagado</a>
        </li>
        <li class="nav-item dropdown " id="nav_reportes">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Reportes
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url("/super_administrador/reportes/inicio") }}">Inicio</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/reportes/dir_of") }}">Dirección | Oficinas</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/reportes/personal") }}">Reporte por personal</a>
          </div>
        </li>
        <li class="nav-item dropdown " id="nav_reportes">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Auditoria
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url("/super_administrador/auditoria/odi") }}">ODI</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/auditoria/competencias") }}">Competencias</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/auditoria/exp_asig") }}">Exposición de asignación del rango excepcional</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/auditoria/rango_actuacion") }}">Rangos de actuación</a>
          </div>
        </li>



      </ul>
    </div>
  </nav>
</header>
@endsection
