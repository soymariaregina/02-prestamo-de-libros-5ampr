<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido - Préstamo de libros del CETis108</title>
  <!-- Integración de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Integración de FontAwesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- Inicio Navbar -->
  <nav class="navbar navbar-expand bg-dark navbar-dark">
    <div class="container">
      <a href="." class="navbar-brand">
        <img class="logo-navbar" src="images/logo-cetis108-gmail.png" alt="Logo CETis108">
      </a>
      <button class="navbar-toggler" type="button"
        data-toggle="collapse"
        data-target="#miNavbar"
        aria-controls="miNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="miNavbar">
        <!-- Libros, Reportes, Acerca de, Login -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">Libros</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Reportes</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Acerca de</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-sign-in"></i>&nbsp;
              Iniciar sesión
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Fin Navbar -->

  <!-- Inicio Jumbotron -->
  <div class="container">
    <div class="jumbotron mt-4 mb-4">
      <h1 class="display-4">CETis108</h1>
      <p class="lead">Bienvenido al sistema de préstamo de libros de la biblioteca del plantel.</p>
      <hr>
      <a href="#" class="btn btn-primary btn-lg">
        <i class="fa fa-sign-in"></i>&nbsp;
        Iniciar sesión
      </a>
    </div>
  </div>
  <!-- Fin Jumbotron -->
  
  <!-- Código Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>