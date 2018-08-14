@section('nav')
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Evaluación
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
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
        <li class="nav-item ">
          <a class="nav-link" href="#">Normas </a>
        </li>


      </ul>
    </div>
  </nav>
</header>
@endsection

@section('navi')
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false" >Normas </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link  " href="{{url("/evaluado")}}" id="#" role="button"  aria-haspopup="true" aria-expanded="false">
            Evaluación
          </a>

        </li>

        <li class="nav-item ">
          <a class="nav-link " href="{{url("/test")}}"  aria-haspopup="true" aria-expanded="false">Historial</a>
        </li>



      </ul>
    </div>
  </nav>
</header>
@endsection
@section('navs')
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false" >Normas </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link  " href="{{url("/supervisor-evaluador")}}" id="#" role="button"  aria-haspopup="true" aria-expanded="false">
            Evaluación
          </a>

        </li>

        <li class="nav-item ">
          <a class="nav-link " href="{{url("/aprobar")}}"  aria-haspopup="true" aria-expanded="false">Aprobar ODI</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="{{url("/audi")}}"  aria-haspopup="true" aria-expanded="false">Auditoria</a>
        </li>

      </ul>
    </div>
  </nav>
</header>
@endsection
