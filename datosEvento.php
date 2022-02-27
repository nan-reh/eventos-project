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

<h1>Datos del evento</h1>

<br><br>

<table class="table table-striped table-condensed" style="white-space: pre-wrap">
				
				<tr>
					<th width="20%">ID</th>
					<td><?php echo $event['id']; ?></td>
				</tr>
				<tr>
					<th width="20%">Fecha</th>
					<td><?php echo $event['fecha']; ?></td>
				</tr>
				<tr>
					<th>Titulo</th>
					<td><?php echo $event['titulo']; ?></td>
				</tr>
				<tr>
					<th>Descripcion</th>
					<td><?php echo $event['descripcion']; ?></td>
				</tr>
				<tr>
					<th>Imagen</th>
                    
					<td> <img src="imagenes/<?= $event['imagen'] ?>" class="img-thumbnail" height="380" width="470"></td>
				</tr>
				
			</table>
            <td><h4>Estado:</h4></td>
        <td><?php if($event['estado'] == '1'){
								                  echo '<h4><span class="label label-danger">Pendiente</span></h4>';
							              }
                            else if ($event['estado'] == '2' ){
								                  echo '<h4><span class="label label-warning">En proceso</span></h4>';
							              }
                            else if ($event['estado'] == '3' ){
								                  echo '<h4><span class="label label-success">Resuelto</span></h4>';
							              }
							          ?>
              
                      </td>
</div>
</div>
<br><br>

<a href="formModificarEvento.php?id=<?= $event['id'] ?>" class="glyphicon glyphicon-edit btn btn-primary"> Modificar</a>
  <input type="hidden" name="id" value="<?= $event['id'] ?>">
  <a href="./" class="glyphicon glyphicon-home btn btn-default"> Regresar</a>
</form>

</div>

</div>

</div>

<br><br>
</body>
</html>