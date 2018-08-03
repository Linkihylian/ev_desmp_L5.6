<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Evaluacion Desempeño | @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    @yield('css')
  </head>
  <body>

    <!--Empieza el contenido de la pagina-->
    <main role="main" class="container">
      @yield('contenido')
    </main>
    <!--Acaba el contenido de la pagina-->
  </body>
  <!-- JavaScript -->
  <script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
  <script src="{{ asset("js/popper.min.js") }}"></script>
  <script src="{{ asset("js/bootstrap.min.js") }}"></script>
  @yield('js')
</html>
