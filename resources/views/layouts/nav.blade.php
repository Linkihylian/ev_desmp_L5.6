@section('nav')
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="{{ url("/super_administrador") }}">Normas </a>
        </li>
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



      </ul>
    </div>
  </nav>
</header>
@endsection
