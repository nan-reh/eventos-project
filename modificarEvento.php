<!DOCTYPE html>
<html>
<head>
	<title>Eventos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/plotly.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script src="jspdf/dist/jspdf.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <!-- Marca y alternar se agrupan para una mejor visualización móvily -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">EVENTOS</a>
    </div>

    <!-- Recopile los enlaces de navegación, formularios y otro contenido para toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">INICIO</a></li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php  

    require 'funciones/conexion.php';
    require 'funciones/eventos.php';
    //$imagen = subirImagen();
    $flag = modificar();
    $css = 'danger';  //color rojo
    $mensaje = 'No se puede modificar el evento'; //predeterminado
    if ( $flag ) {
        $css = 'success'; //color verde
        $mensaje = 'Evento modificado correctamente!';
    }
?>

    <main class="container">
        <h1>Modificación de un evento</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="index.php" class="btn btn-light">Volver a panel </a>
        </div>

    </main>

</html>
