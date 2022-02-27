<?php
        include 'funciones/conexion.php';
        require 'funciones/eventos.php';
        $event = verporid();
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

<div class="container">

<div class="row">
<div class="col-md-12">

<h1>Modificacion del evento ID:<?=$event['id']?></h1>

<br><br>

<form method="POST" action="modificarEvento.php" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">Fecha</label>
    <input type="date" name="fecha" data-date-format="dd-mm-yyyy" value="<?= $event['fecha'] ?>" class="form-control" placeholder="Fecha" require>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="titulo" value="<?= $event['titulo'] ?>" class="form-control" placeholder="Titulo" require>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <textarea name="descripcion" value="" class="form-control" placeholder="Descripcion"><?= $event['descripcion'] ?></textarea>
  </div>

  <div class="img-thumbnail">
    <label for="exampleInputPassword1">Imagen actual: </label>
    <img src="imagenes/<?= $event['imagen'] ?>" class="img-thumbnail" height="380" width="470">
  </div>

  <div class="custom-file mt-1 mb-4">
    <input type="file" name="imagen"  class="custom-file-input" id="customFileLang" lang="es">
    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco">Seleccionar archivo nuevo: </label> 
</div>

<input type="hidden" name="id" value="<?= $event['id']; ?>">
<input type="hidden" name="imgActual" value="<?= $event['imagen']; ?>">
  
  <!-- ESTADO DE EVENTO -->
  <div class="form-group">
  <label class="control-label">Estado</label>
  <br>
    <div class="form group ">
      <div class="input-group col-sm-3">
        <select class="form-control" name="estado">
            <option value="">- Selecciona estado -</option>
            <option value="1" <?php if ($event ['estado']==1){echo "selected";}?>> Pendiente</option>
            <option value="2" <?php if ($event ['estado']==2){echo "selected";}?>> En proceso</option>
            <option value="3" <?php if ($event ['estado']==3){echo "selected";}?>> Resuelto</option>
        </select>
                  <!--span class="input-group-addon"><i class="fa fa-clock-o"></i></span-->
                </div>
              </div>
            </div>
</div>
</div>
<br><br>

  <button type="submit" class="glyphicon glyphicon-save btn btn-primary" class=""> Guardar</button>
  <a href="formEliminarEvento.php?id=<?= $event['id'] ?>" class="glyphicon glyphicon-trash btn btn-danger" class=""> Eliminar</a>
  <input type="hidden" name="id" value="<?= $event['id'] ?>">
  <a href="./" class="btn btn-default glyphicon glyphicon-home "> Regresar</a>
</form>

</div>

</div>

</div>

<br><br>
</body>
</html>