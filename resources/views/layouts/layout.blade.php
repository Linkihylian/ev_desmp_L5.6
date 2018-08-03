<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets/images/ico.png')}}">
    <title>Evaluacion Desempeño | @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    @yield('css')
  </head>
  <body background="{{asset('assets/images/fondo_azul1024.png')}}">
    <div class="container ">
      <div class="row mt-3 mb-3">
        <div class="rounded-top" style="background:url({{asset('assets/images/fondo_blanco.png')}})">
          <img width="100%" data-holder-rendered="true" class="img-responsive mt-3 mb-3" src="{{asset('assets/images/cabecera3.png')}}" alt="Imagen banner1">
          @yield('nav')
          <div class="panel panel-default">
            <div class="container mb-5 mt-2">
              <div class="row mb-4">
                <div class="col-md-4 offset-md-4">
                  <h2 align="center" style="color:#1960A4;">@yield('titulo')</h2>





                </div>
              </div>

            <!--Empieza el contenido de la pagina-->
            <main role="main" class="container">
              @yield('contenido')
            </main>
            <!--Acaba el contenido de la pagina-->
          </div>
        </div>
      </div>
      <footer class="footer">
        <img class="rounded-bottom" src="{{asset('assets/images/pie.png')}}" width="100%" data-holder-rendered="true" alt="Imagen banner1">
      </footer>
    </div>

  </div>
    <!-- JavaScript -->
    <script type="text/javascript">base_url = "{{ url("/") }}"; </script>
    <script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("js/popper.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    @yield('js')
  </body>

</html>
