@section('nav')
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        @php
          $a = 1
        @endphp

        <li class="nav-item " id="normas">
          <a class="nav-link" href="{{ url("/normas") }}">Normas</a>
        </li>

        @if($a == 1) <!--Super Administrador-->
        <li class="nav-item dropdown">
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
        <li class="nav-item">
          <a class="nav-link" href="#">Reportes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Auditoria</a>
        </li>

      @elseif($a == 2) <!--Evaluador -->
        <li class="nav-item" id="nav_evaluar">
          <a class="nav-link" href="{{url("/evaluador/evaluar")}}">Evaluar</a>
        </li>
        <li class="nav-item " id="nav_crear_odi">
          <a class="nav-link " href="{{url("/evaluador/crear_odi")}}">Crear ODI </a>
        </li>
        <li class="nav-item" id="nav_recha_odi">
          <a class="nav-link" href="/evaluador/odis_rechazadas">ODI Rechazadas</a>
        </li>
        <li class="nav-item" id="nav_auditoria">
          <a class="nav-link" href="/evaluador/auditoria">Auditoria</a>
        </li>
      @endif
      </ul>
    </div>
  </nav>
</header>
@endsection
