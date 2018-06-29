<?php
require_once 'conexion.php';

$id=$_REQUEST['id'];

$Imagen=$_FILES["Imagen"]["name"];
$ruta=$_FILES["Imagen"]["tmp_name"];
$destino="fotos/".$Imagen;
copy($ruta,$destino);

mysql_query("INSERT INTO marcador (Imagen) VALUES('$destino') WHERE id='$id'");
header("Location: tabla.php");

?>