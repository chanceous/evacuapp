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
  </head>

  <body>
  <div id="app">
            
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header" style="background-color:#539091;color:white">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">EvacuApp</span>
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
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
