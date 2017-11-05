<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EvacuApp</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="css/app.css" rel="stylesheet">
    <link href="material.min.css" rel="stylesheet">
     <link rel="manifest" href="manifest.json">
  </head>

  <body>
  <style>
     #unipublish
      {
        background-color: pink;
        color: #FAFAFA;
        border-radius: 15px;
      }
      #botonalertar
      {
        margin-top: 25px;
      }
      .checkbox
      {
        margin-top: 35px;
      }
    </style>
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
    
    <div class="container">
<form class="alertarform" action="index.html" method="post">
    <div class="container">
      <div class="row">

        <div class="col-sm-6 text-center">
          <h4>SENSORES</h4>
          

            <div class="container">
             @foreach($sensores as $sensor)
               @if($sensor->nivel_agua > '5')      
              <div class="mdl-card mdl-shadow--3dp" style="min-height:10px;width:100%;max-width:550px;border-radius:5px;background-color:#ed1b24;color:white">  
               @else
            <div class="mdl-card mdl-shadow--3dp" style="min-height:10px;width:100%;max-width:550px;border-radius:5px;background-color:white;">  
                @endif
<div class="row">
<div class="col-sm-3">

<h2> {{ $sensor->id }}</h2>

</div>
<div class="col-sm-7">


<h3>{{ $sensor->nivel_agua }} mts
</h3>
  
</div>
<div class="col-sm-2">
<h2><i class="material-icons">location_on</i></h2>
</div>
</div>
              
            </div>

<br>

@endforeach
            
          </div>
         
        </div>
        <div class="col-sm-6 text-center">
          <h4>REFUGIOS</h4>
          <p class="lead"></p>
          
            <div class="container">
            @foreach($refugios as $refugio)
              <div class="mdl-card mdl-shadow--3dp" style="min-height:10px;width:100%;max-width:550px;border-radius:5px">
<div class="row">
<div class="col-sm-3">

<h2> {{ $refugio->id }}</h2>


</div>
<div class="col-sm-7">

<h5> {{ $refugio->nombre }}
<br><small>{{ $refugio->direccion }}</small></h5>

</div>
<div class="col-sm-2">
<h2><i class="material-icons">location_on</i></h2>
</div>

</div>
              
            </div>
            <Br>
    @endforeach

        </div>
 
      </div>
      <div class="text-center">
		      <?php foreach($estados as $estado){
            $actual = $estado->estado;
            }; ?>
        @if($actual == '2')
       <button id="show-dialog" type="button" class="mdl-button" style="background-color:#ed1b24;width:200px;height:50px;border-radius:25px;color:white;font-size:20px;">Alertar</button>
  <dialog class="mdl-dialog">
    <h4 class="mdl-dialog__title">¿Seguro?</h4>
    <div class="mdl-dialog__content">
      <p>
        Recorda, que al presionar, te comprometes legalmente
      </p>
    </div>
    <div class="mdl-dialog__actions">
      <a href="alertar" class="mdl-button">ALERTAR</a>
      <button type="button" class="mdl-button close">SALIR</button>
    </div>
  </dialog>
		  @else
		  
		      <button onclick="location.href='restaurar';" type="button" class="mdl-button" style="background-color:#82ea62;width:200px;height:50px;border-radius:25px;color:white;font-size:20px;">Restaurar</a>
		  
		  @endif
  <br><br>
    </div>
  </form>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>
  </body>

</html>
