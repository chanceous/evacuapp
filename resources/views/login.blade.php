<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

     <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="http://127.0.0.1:8000">
                        EvacuApp
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin">Admin</a></li>
                                                    <li><a href="http://127.0.0.1:8000/login">Ingresar</a></li>
                            <li><a href="http://127.0.0.1:8000/register">Registrarme</a></li>
                                            </ul>
                </div>
            </div>
        </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">ADMINSTRADOR</h1>
          <p class="lead">Inicie Sesion!</p>
          <form class="" action="index.html" method="post">
            <ul class="list-unstyled">
              <li><input class="col-lg-4 col-md-4 col-xs-12" type="text" placeholder="Nombre de Usuario" id="nombre" name="nombre" value=""></li>
              <br>
              <li><input class="col-lg-4 col-md-4 col-xs-12" type="password" placeholder="Contraseña" id="pass" name="pass" value=""></li>
            </ul>
            <input class="col-lg-4 col-md-4 col-xs-12" type="submit" id="entrar" name="entrar" value="Entrar">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
