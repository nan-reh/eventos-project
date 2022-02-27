<?php

        include 'funciones/conexion.php';
        require 'funciones/eventos.php';
        //$con = conectar();
        $event = verporid();
        //$modi = modificar();
       

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
<div class="alert alert-danger">
    <strong>Danger!</strong> Esta acción eliminara permanentemente los datos
  </div>
        <!--<main class="container">-->
    <h2>Elimnar evento ID:<?=$event['id'] ?></h2>
    <br>
        <article class="card border-danger py-3 col-6 mx-auto">
            <div class="row container">
                <div class="col">

                <label for="exampleInputEmail1">Fecha</label>
                <div class="col text-danger">
                <h4><?= $event['fecha'] ?></h4>
                </div>
                <br>
                <label for="exampleInputEmail1">Titulo</label>
                <div class="col text-danger">
                <h4><?= $event['titulo'] ?></h4>
                <br>
                </div>
                <label for="exampleInputEmail1">Descripcion</label>
                <div class="col text-danger">
                <h4><?= $event['descripcion'] ?></h4>
                </div>
                <div class="img-thumbnail">
                <label for="exampleInputPassword1">Imagen actual: </label>
                <img src="imagenes/<?= $event['imagen'] ?>" class="img-thumbnail" height="380" width="470">
                </div>
                <br>
                <br>
                <div class="alert alert-danger">
                <strong>Danger!</strong> Esta acción eliminara permanentemente los datos.
                </div>
                <br>

                <br>
                <h3>¿Esta seguro de eliminar este evento?</h3>
                    <form action="eliminarEvento.php" method="post">
                        <input type="hidden" name="id"
                               value="<?= $event['id'] ?>">
                        <button class="btn btn-danger btn-block my-3">
                            Confirmar baja
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary btn-block">
                            Volver a panel
                        </a>

                    </form>
                    </div>
                    
            </div>
        </article>

</div>

</div>

</div>


</body>
</html>