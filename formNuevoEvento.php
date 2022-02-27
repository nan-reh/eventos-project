<?php
        include 'funciones/conexion.php';
        require 'funciones/eventos.php';
?>

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
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">EVENTOS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">INICIO</a></li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

<div class="row">
<div class="col-md-12">

<h1>Nuevo Evento</h1>
<a href="./" class="glyphicon glyphicon-home btn btn-default"> Regresar</a>
<br><br>

<form method="post" action="agregarEvento.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha</label>
    <input type="date" data-date-format="dd-mm-yyyy" name="fecha" class="date form-control" id="exampleInputEmail1" placeholder="Fecha" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="titulo" required class="form-control" id="exampleInputEmail1" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <textarea class="form-control" name="descripcion" id="exampleInputPassword1" placeholder="descripcion"></textarea>
  </div>
  <div class="custom-file mt-1 mb-4">
    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en equipo">Seleccionar un archivo: </label>
    <input type="file" name="imagen"  class="custom-file-input" id="customFileLang" lang="es">
</div>
  <br>
    <!-- ESTADO DE EVENTO -->
    <div class="form-group">
      <label class="control-label">Cambiar estado: </label>
      <br>
        <div class="form group ">
          <div class="input-group col-sm-3">
            <select class="form-control" name="estado">
                <option value="1">Pendiente</option>
                <option value="2">En proceso</option>
                <option value="3">Resuelto</option>
            </select>
                      <!--span class="input-group-addon"><i class="fa fa-clock-o"></i></span-->
                    </div>
                  </div>
                </div>
    </div>
    </div>

    <br><br>

  <button type="submit" class="glyphicon glyphicon-ok btn btn-primary"> Agregar</button>
</form>

</div>
</div>
</div>

<br><br>

</body>
</html>