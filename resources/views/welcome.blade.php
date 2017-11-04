@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">ALERTA!</h1>
          <p class="lead">EL RIO ESTA SUBIENDO, AQUI ESTAN LOS REFUGIOS MAS CERCANOS</p>
          <iframe frameborder="0" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="https://www.google.com/maps/d/embed?mid=1EyYPggzOi9VLZK91L_5i7-guFchaZAd_" width="640" height="480"></iframe>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>