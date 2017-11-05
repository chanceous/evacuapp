<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EvacuApp</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="material.min.css" rel="stylesheet">
     <link rel="manifest" href="manifest.json">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>

  <body>
  <div id="app">
       
       
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header" style="background-color:#539091;color:white">
    <div class="mdl-layout__header-row">
		 <img src="logotipo.png" width="50" height="50">
	
      <div class="mdl-layout-spacer"></div>
      <nav class="mdl-navigation mdl-layout--large-screen-only">
      
        <a class="mdl-navigation__link" href="/">Inicio</a>
        <a class="mdl-navigation__link" href="consejos">Consejos</a>
        @guest
        <a class="mdl-navigation__link" href="login">Ingresar</a>
        <a style="background-color:white;" href="register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
          Registro
      </a>
                        @else
        <a class="mdl-navigation__link" href="admin">Panel</a>
        <a style="background-color:white;" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">
          Cerrar Sesion
      </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        @endguest
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">EvacuApp</span>
    <nav class="mdl-navigation">
       <a class="mdl-navigation__link" href="/">Inicio</a>
        <a class="mdl-navigation__link" href="consejos">Consejos</a>
        @guest
        <a class="mdl-navigation__link" href="login">Ingresar</a>
        <a style="background-color:white;" href="register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
          Registro
      </a>
                        @else
        <a class="mdl-navigation__link" href="admin">Panel</a>
         <a style="background-color:white;" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">
          Cerrar Sesion
      </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        @endguest
    </nav>
  </div>
    <main class="mdl-layout__content">
    <div class="page-content">
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
           <?php foreach($estados as $estado){
            $actual = $estado->estado;
            }; ?>
        @if($actual == '2')
          <h1 class="mt-5" style="color:green;">Todo en Orden</h1>
          <p class="lead">EL ESTADO DEL RIO ES NORMAL, DE TODAS MANERAS, RECORDA ESTAR SIEMPRE ATENTO A LAS NOTIFICACIONES EN LA WEB</p>
          <a href="consejos" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
           Consejos
          </a>
          <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Solicitar Ayuda
          </a>
          </div>
          <br>
          @else
           <h1 class="mt-5" style="color:red;">¡ALERTA!</h1>
          <p class="lead">EL RIO ESTA SUBIENDO, AQUI ESTAN LOS REFUGIOS MAS CERCANOS</p>
          <a href="consejos" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
           Consejos
          </a>
          <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Solicitar Ayuda
          </a>
         
          </div>
          <br>
         @endif
          <div class="col-sm-6">
          <div class="mdl-shadow--4dp" style="padding:0px;width:100%">
          <iframe frameborder="0" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%" src="https://www.google.com/maps/d/embed?mid=1EyYPggzOi9VLZK91L_5i7-guFchaZAd_" width="640" height="480"></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="material.min.js"></script>
  </body>

</html>