<?php

require "./connection.php";
$con = conectar();


$sql = "UPDATE INTO `event` (fecha, titulo, descripcion) value (\"$_POST[fecha]\",\"$_POST[titulo]\",\"$_POST[descripcion]\")";

$con->query($sql);
header("Location: index.php");

?>