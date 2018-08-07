@section('nav')
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        @php
          $a = 2
        @endphp

        <li class="nav-item ">
          <a class="nav-link" href="{{ url("/inicio") }}">Normas</a>
        </li>

        @if($a == 1) <!--Super Administrador-->
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Evaluación
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url("/super_administrador/configurar_evaluacion") }}">Configurar</a>
            <a class="dropdown-item" href="{{ url("/super_administrador/configurar_excepcional") }}">Exposición de asignación del rango excepcional</a>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#">Aprobar evaluación </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Evaluar resagado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reportes</a>
        </li>

      @elseif($a == 2) <!--Evaluador -->
        <li class="nav-item dropdown active">
          <a class="nav-link" href="#" aria-haspopup="true">
            Evaluador
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#">Crear ODI </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Evaluar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Auditoria</a>
        </li>
      @endif
      </ul>
    </div>
  </nav>
</header>
@endsection
