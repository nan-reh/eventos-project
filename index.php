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
      <a class="navbar-brand" href="https://sis-04/equipos/index.php">Menu princiapl</a>
    </div>

    <!-- Recopile los enlaces de navegación, formularios y otro contenido para toggling
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">INICIO</a></li>

      </ul-->


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

<div class="row">
<div class="col-md-12">

<h1>Reporte de Eventos</h1><br>

<a href="./formNuevoEvento.php" class="btn btn-default">Crear nuevo evento</a>
<br><br>

<?php 

include "funciones/conexion.php";
require "funciones/eventos.php";
$event = listar();
$con = conectar();
//$data = grafica();
//$r = grafica();

?>

<table class="pagination table table-striped table-hover table table-bordered">
      <thead>
				        <tr>
                    <th>Id</th>
					          <th>Fecha</th>
					          <th>Evento</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Info</th>
                    <th>Imagen</th>
				        </tr>
      </thead>
      <tbody>

<?php

      while( $evento = mysqli_fetch_assoc( $event ) ){

?>

                <tr>
                  
                    <td><h3><span class="label label-primary"><?= $evento['id'] ?></span></h3></td>
                    <td><h3><span class="label label-default"><?= $evento['fecha'] ?></span></h3></td>
                    <td><?= $evento['titulo'] ?></td>
                    <td><?= $evento['descripcion'] ?></td>
                    <td><?php if($evento['estado'] == '1'){
								                  echo '<h4><span class="label label-danger">Pendiente</span></h4>';
							              }
                            else if ($evento['estado'] == '2' ){
								                  echo '<h4><span class="label label-warning">En proceso</span></h4>';
							              }
                            else if ($evento['estado'] == '3' ){
								                  echo '<h4><span class="label label-success">Resuelto</span></h4>';
							              }
							          ?>
              
                      </td>
                    <td>
                    <a href="datosEvento.php?id=<?= $evento['id'] ?>" class=" glyphicon glyphicon-eye-open btn btn-primary">
                            
                    </a>
                    <td><a href="mostrarImagen.php?id=<?= $evento['id']; ?>" type="button" class=" glyphicon glyphicon-picture btn btn-default">
                            
                    </td>
                    

                </tr>

<?php
}
?>

</tbody>

</table>
<!-- pagunacion en desarrollo -->
<ul class="pagination">
  <li><a href="#">1</a></li>
  <li class="active"><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
<!-- pagunacion en desarrollo -->
<br>
<a href="./formNuevoEvento.php" class="btn btn-default">Crear nuevo evento</a>
<br><br><br>

<div class="panel panel-default">
  <div class="panel-heading">Grafica (no desarrollado)</div>
  <div class="panel-body">
<div id="chart"></div>

<table action="funciones/eventos.php" class="table table-bordered">
  <thead>
    <th>Fecha</th>
    <th>Cantidad</th>
  </thead>
<?php
if(isset($_GET["start"]) && isset($_GET["end"])){

foreach($data as $d):?>
  <tr>
    <td><?php echo $d->fecha;?></td>
    <td><?php echo $d->cx;?></td>
  </tr>
<?php endforeach; ?>
</table>
</div>
</div>

<script>
var data1 = {
  x: [
  <?php foreach($data as $d):?>
  "<?php echo $d->fecha; ?>",
  <?php endforeach; ?>
  ],
  y: [
  <?php foreach($data as $d):?>
  "<?php echo $d->cx; ?>",
  <?php endforeach; ?>
  ],
  //text: ['Text A', 'Text B', 'Text C'],
  //textposition: 'top',
  type: 'scatter',
  name:'Datos 1',
  line:{ width: 5, color:'red',dash:'solid'},
  marker:{ size: 10, color:'blue'}
};

var data = [data1];

Plotly.newPlot('chart', data,{title:'Grafica de Eventos'});
</script>
<?php }  //endif; 

?>

</div>

</div>

</div>


</body>
</html>